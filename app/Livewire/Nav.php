<?php

namespace App\Livewire;

use Livewire\Component;

class Nav extends Component
{
    public $page='';

    public function render()
    {
        $this->page = $this->getPage(url()->current());
        return view('livewire.nav');
    }
    public function getPage($url)
    {
        $url = parse_url($url);
        if (isset($url['path'])) {
            return trim($url['path'], '/');
        } else {
            return '/';
        }

    }
}
