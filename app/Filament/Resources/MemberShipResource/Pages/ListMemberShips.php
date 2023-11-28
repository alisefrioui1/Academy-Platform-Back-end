<?php

namespace App\Filament\Resources\MemberShipResource\Pages;

use App\Filament\Resources\MemberShipResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberShips extends ListRecords
{
    protected static string $resource = MemberShipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
