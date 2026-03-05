<?php

namespace App\Filament\Resources\Users\Schemas;

use App\UserStatus;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->required()
                            ->unique('users', 'email'),
                        TextInput::make('phone')
                            ->required(),
                        TextInput::make('password')
                            ->password()
                            ->dehydrated(fn($state) => filled($state))
                            ->dehydrateStateUsing(fn($state) => Hash::make($state))
                            ->required(fn(string $operation) => $operation === 'create'),
                        Select::make('status')
                            ->options([
                                UserStatus::ACTIVE->value => 'Active',
                                UserStatus::INACTIVE->value => 'Inactive',
                                UserStatus::BANNED->value => 'Banned',
                            ])
                            ->required(),
                        Checkbox::make('is_admin')
                            ->label('Role Admin')
                            ->default(false),
                    ])
            ]);
    }
}
