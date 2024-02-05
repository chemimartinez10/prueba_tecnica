<?php

namespace App\Livewire;

use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $birth_date;
    public $identification;
    public $phone;
    public function mount(int $user_id)
    {
        $user = User::find($user_id);
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->birth_date = $user->birth_date;
        $this->identification = $user->identification;
        $this->phone = $user->phone;
    }
    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required',
            'birth_date' => 'required|before:' . Carbon::now()->subYears(18)->format('Y-m-d'),
            'phone' => 'string|max:10|min:10',
        ]);
        $user = User::find($this->id);
        $user->update($validated);
        $log = Log::create([
            'user_id' => Auth::user()->id,
            'type' => 'Usuario',
            'description' => 'Actualización de usuario ' . $user->email,
        ]);

        $this->forceClose()->closeModal();
        $this->redirect('/users', false);
    }
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
    public function render()
    {
        return view('livewire.edit-user');
    }
}
