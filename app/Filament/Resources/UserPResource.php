<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserPResource\Pages;
use App\Filament\Resources\UserPResource\RelationManagers;
use App\Models\user_p;
use App\Models\UserP;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserPResource extends Resource
{
  
    protected static ?string $model = "users";

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\FileUpload::make('photo'),
                Forms\Components\TextInput::make('username')
                        ->required()
                        ->unique(ignoreRecord: true),
             Forms\Components\TextInput::make('gender')->required(),
             Forms\Components\TextInput::make('phone_number')->required(),
             Forms\Components\TextInput::make('city')->required(),
             Forms\Components\TextInput::make('user_state')->required(),
             Forms\Components\TextInput::make('email')->required(),



            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserPS::route('/'),
            'create' => Pages\CreateUserP::route('/create'),
            'edit' => Pages\EditUserP::route('/{record}/edit'),
        ];
    }    
}
