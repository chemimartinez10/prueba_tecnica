<?php

namespace App\Livewire;

use App\Models\Log;
use Livewire\Component;

class Logs extends Component
{
    public $logs;
    public function mount(){
        $this->logs = Log::limit(25)->orderBy('created_at')->get();
    }
    public function render()
    {
        return view('livewire.logs');
    }
}
