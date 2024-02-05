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
            Column::make("Nombre", "name")
                ->sortable()->searchable(),
            Column::make("Correo", "email")
                ->sortable()->searchable(),
            Column::make("Fecha de nacimiento", "birth_date")
                ->sortable(),
            Column::make("Cédula", "identification")
                ->sortable()->searchable(),
            Column::make("Teléfono", "phone")
                ->sortable()->searchable(),
            Column::make("Edad")
                ->label(fn($row, Column $column) => Carbon::now()->diff($row->birth_date)->y),
            Column::make("Creado", "created_at")
                ->sortable(),
            Column::make("Actualizado", "updated_at")
                ->sortable(),
            Column::make('Acción')
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
