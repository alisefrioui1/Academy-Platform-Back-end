<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;


class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
               
                    Forms\Components\Section::make()
                        ->schema([
                            Forms\Components\TextInput::make('subject')
                                ->required()
                               ,
                               Forms\Components\TextInput::make('category')
                               ->required()
                              ,
                              Forms\Components\TextInput::make('sub_category')
                              
                              ,

                         

                            Forms\Components\MarkdownEditor::make('content')
                                ->required()
                                ->columnSpan('full'),

                                Forms\Components\TextInput::make('state')
                                ->required(),
                                Forms\Components\TextInput::make('link')
                                ->required(),
                                 Forms\Components\TextInput::make('is_bookmarked')
                                 ->numeric()
                                ->required(),
                            Forms\Components\Select::make('plan_id')
                                ->relationship('plan', 'designation')
                                ->required(),
                                Forms\Components\Section::make('Image')
                                ->schema([
                                    Forms\Components\FileUpload::make('image1')
                                        ->label('Image 1')
                                        ->image()
                                       
                                ]),
                                Forms\Components\Section::make('Image')
                                ->schema([
                                    Forms\Components\FileUpload::make('image2')
                                        ->label('Image 2')
                                        ->image()
                                       
                                ]),
                                Forms\Components\Section::make('Image')
                                ->schema([
                                    Forms\Components\FileUpload::make('image3')
                                        ->label('Image 3')
                                        ->image()
                                       
                                ])
                            
                           

                          
                        ])
                       
               
               

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('image1'),
                TextColumn::make('subject')
              ->searchable(),
              TextColumn::make('category')
              ->searchable(),
              TextColumn::make('sub_category')
              ->label('sub category')
              ->searchable(),
            TextColumn::make('content')
                    ->label('content')
                    ->listWithLineBreaks()
                    ->limit(5),
            TextColumn::make('plan.designation')
                 
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),

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
            'index' => Pages\ListContents::route('/'),
           /*  'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'), */

        ];
    }    
}
