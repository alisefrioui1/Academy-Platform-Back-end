<?php

namespace App\Filament\Resources\UserPResource\Pages;

use App\Filament\Resources\UserPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserP extends EditRecord
{
    protected static string $resource = UserPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
