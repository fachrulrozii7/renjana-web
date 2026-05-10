<?php

namespace App\Filament\Resources\Branches\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_id')
                    ->required(),
                TextInput::make('name_en')
                    ->required(),
                Textarea::make('description_id')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('description_en')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('location')
                    ->default(null),
                TextInput::make('branch_url')
                    ->url()
                    ->default(null),
                FileUpload::make('image')
                    ->image()
                    ->directory('branches-images') // Menambahkan folder khusus untuk foto cabang
                    ->columnSpanFull(), // Agar kotak upload-nya memanjang penuh
            ]);
    }
}
