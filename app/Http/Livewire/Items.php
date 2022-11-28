<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Livewire\Component;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class Items extends Component implements HasTable
{

    use InteractsWithTable;

    protected function getTableQuery(): Builder|Relation
    {
        return Item::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
        ];
    }

    public function render()
    {
        return view('livewire.items');
    }
}
