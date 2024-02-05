<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()->searchable(),
            Column::make("Email", "email")
                ->sortable()->searchable(),
            Column::make("Birth date", "birth_date")
                ->sortable(),
            Column::make("Identification", "identification")
                ->sortable()->searchable(),
            Column::make("Phone", "phone")
                ->sortable()->searchable(),
            Column::make("Age")
                ->label(fn($row, Column $column) => Carbon::now()->diff($row->birth_date)->y),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('livewire.user-action')->with(
                        [
                            'user' => $row,
                        ]
                    )
                )->html(),
        ];
    }
}
