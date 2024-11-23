<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class RegisterPage extends Component
{
    public function render()
    {
        return view('livewire.register-page')
        ->layout("layouts.default", ["title" => "Register"]);
    }
}
