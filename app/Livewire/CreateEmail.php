<?php

namespace App\Livewire;

use App\Jobs\SendEmail;
use App\Models\Email;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class CreateEmail extends ModalComponent
{
    public string $subject;
    public string $message;
    public string $to_user;
    public function render()
    {
        return view('livewire.create-email');
    }
    public function submit()
    {
        $validated = $this->validate([
            'to_user' => ['required','email','max:200',Rule::notIn([Auth::user()->email])],
            'subject' => 'required|max:200',
            'message' => 'required|string|max:500',
        ]);
        $email = new Email;
        $to_user_model = User::where('email', $validated['to_user'])->firstOrFail();
        $email->to_email = $this->to_user;
        $email->to_user = $to_user_model->id;
        $email->subject = $validated['subject'];
        $email->message = $validated['message'];
        $email->from_user = Auth::user()->id;
        $email->status = false;
        $email->save();

        
        
        $this->forceClose()->closeModal();
        $this->redirect('/emails', false);
        
        SendEmail::dispatch($email->id)->onQueue('default');

    }
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
}
