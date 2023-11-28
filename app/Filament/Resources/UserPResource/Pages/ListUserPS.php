<?php

namespace App\Filament\Resources\UserPResource\Pages;

use App\Filament\Resources\UserPResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserPS extends ListRecords
{
    protected static string $resource = UserPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
