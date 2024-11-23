<?php

namespace App\Livewire;

use Livewire\Component;

class UserLogin extends Component
{
    public string $layout = 'layouts.app';

    public function render()
    {
        return view('livewire.user-login');
    }
}
