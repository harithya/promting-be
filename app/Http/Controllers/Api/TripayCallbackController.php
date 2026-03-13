<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TripayCallbackController extends Controller
{
    /**
     * Handle Tripay callback notification.
     */
    public function handle(Request $request)
    {
        // Get callback signature from header
        $callbackSignature = $request->header('X-Callback-Signature');

        // Get raw JSON body
        $json = $request->getContent();
        $data = json_decode($json, true);
        $json = json_encode($data, JSON_UNESCAPED_SLASHES);

        // Generate signature for verification
        $privateKey = env('TRIPAY_PRIVATE_KEY');
        $signature = hash_hmac('sha256', $json, $privateKey);

        // Verify signature
        if ($signature !== $callbackSignature) {
            Log::warning('Tripay callback signature mismatch', [
                'expected' => $signature,
                'received' => $callbackSignature
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Invalid signature'
            ], 401);
        }

        // Parse JSON data
        $data = json_decode($json, true);

        // Log callback data
        Log::info('Tripay callback received', $data);

        // Find transaction by merchant_ref
        $transaction = Transaction::where('merchant_ref', $data['merchant_ref'])->first();

        if (!$transaction) {
            Log::warning('Transaction not found', ['merchant_ref' => $data['merchant_ref']]);

            return response()->json([
                'success' => false,
                'message' => 'Transaction not found'
            ], 404);
        }

        // Check if transaction already processed (prevent duplicate callback)
        if ($transaction->status === 'PAID' && $transaction->user_id) {
            Log::info('Transaction already processed', [
                'merchant_ref' => $data['merchant_ref'],
                'status' => $transaction->status,
                'user_id' => $transaction->user_id,

            ]);

            return response()->json([
                'success' => true,
                'message' => 'Transaction already processed'
            ]);
        }

        // Use database transaction for atomic operations
        try {
            DB::beginTransaction();

            // Update transaction data
            $transaction->update([
                'reference' => $data['reference'],
                'status' => $data['status'],
                'amount_received' => $data['amount_received'],
            ]);

            // If payment is successful, create user
            if ($data['status'] === 'PAID' && !$transaction->user_id) {
                // Check if email already exists
                $existingUser = User::where('email', $transaction->customer_email)->first();

                if ($existingUser) {
                    // Link existing user to transaction
                    $transaction->update([
                        'user_id' => $existingUser->id
                    ]);

                    Log::info('Linked existing user to transaction', [
                        'user_id' => $existingUser->id,
                        'transaction_id' => $transaction->id
                    ]);
                } else {
                    // Generate random password
                    $password = Str::random(12);

                    // Create new user
                    $user = User::create([
                        'name' => $transaction->customer_name,
                        'email' => $transaction->customer_email,
                        'password' => Hash::make($password),
                        'is_admin' => 0,
                        'status' => UserStatus::ACTIVE->value,
                    ]);

                    // Update transaction with user_id
                    $transaction->update([
                        'user_id' => $user->id
                    ]);

                    // TODO: Send WhatsApp notification with access credentials
                    Log::info('User created for transaction', [
                        'user_id' => $user->id,
                        'transaction_id' => $transaction->id,
                        'phone' => $transaction->customer_phone,
                        'password' => $password // Remove this in production
                    ]);
                }
            }

            // Commit transaction
            DB::commit();

            // Return success response
            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();

            Log::error('Error processing callback', [
                'merchant_ref' => $data['merchant_ref'],
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error processing callback'
            ], 500);
        }
    }
}
