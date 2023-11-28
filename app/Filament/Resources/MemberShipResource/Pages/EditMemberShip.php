<?php

namespace App\Filament\Resources\MemberShipResource\Pages;

use App\Filament\Resources\MemberShipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMemberShip extends EditRecord
{
    protected static string $resource = MemberShipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
