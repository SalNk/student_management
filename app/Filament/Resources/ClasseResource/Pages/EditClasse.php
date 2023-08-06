<?php

namespace App\Filament\Resources\ClasseResource\Pages;

use App\Filament\Resources\ClasseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClasse extends EditRecord
{
    protected static string $resource = ClasseResource::class;

    protected function getRedirectUrl(): string
    {
        return $this()->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            // 
        ];
    }
}
