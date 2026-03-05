<?php

namespace App\Filament\Resources\Users\Tables;

use App\UserStatus;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable()
                    ->badge()
                    ->color(fn($state): string => match ($state) {
                        UserStatus::ACTIVE->value => 'success',
                        UserStatus::INACTIVE->value => 'warning',
                        UserStatus::BANNED->value => 'danger',
                    })
                    ->sortable(),
                IconColumn::make('is_admin')
                    ->boolean(),
            ])
            ->filters([
                Filter::make('is_admin')
                    ->query(fn($query) => $query->where('is_admin', true)),
                SelectFilter::make('status')
                    ->options([
                        UserStatus::ACTIVE->value => 'Active',
                        UserStatus::INACTIVE->value => 'Inactive',
                        UserStatus::BANNED->value => 'Banned',
                    ])

            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ])->iconButton()
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
