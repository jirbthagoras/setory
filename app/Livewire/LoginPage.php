<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class LoginPage extends Component
{
    public function render()
    {
        return view('livewire.login-page')
        ->layout('layouts.default', ["title" => "Login"]);
    }
}
