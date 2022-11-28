<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Filament\Forms\Components\Actions\Modal\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Livewire\Component;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Collection;

class Items extends Component implements HasTable, HasForms
{

    use InteractsWithTable, InteractsWithForms;

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getTableQuery(): Builder|Relation
    {
        return Item::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->url(fn (Item $record): string => route('items.edit', ['item' => $record])),
            ToggleColumn::make('is_active'),
            TextColumn::make('price')
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name'),
        ];
    }

    public function render()
    {
        return view('livewire.items');
    }
}
