<?php

namespace App\Livewire;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Nav extends Component
{
    public $page = '';

    public function render()
    {
        $this->page = $this->getPage(url()->current());
        return view('livewire.nav');
    }
    private function getPage($url)
    {
        $url = parse_url($url);
        if (isset($url['path'])) {
            return trim($url['path'], '/');
        } else {
            return '/';
        }

    }
    public function logout()
    {
        Auth::logout();
        session()->regenerate();
        return $this->redirect('/login', false);
    }
}
