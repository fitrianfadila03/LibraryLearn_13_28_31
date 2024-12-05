<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->label('Judul Buku'),
                Forms\Components\TextInput::make('penulis')
                    ->required()
                    ->label('Penulis'),
                Forms\Components\TextInput::make('tahun_terbit')
                    ->required()
                    ->label('Tahun Terbit'),
                Forms\Components\TextInput::make('uraian')
                    ->required()
                    ->label('Uraian'),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->label('image buku'),
                   
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Buku')
                    ->sortable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->label('Penulis')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_terbit')
                    ->label('Tahun Terbit')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('uraian')
                    ->label('Uraian')
                    ->sortable(),
                    Tables\Columns\TextColumn::make('image')
                    ->label('image buku')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }
}