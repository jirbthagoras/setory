<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class UserLogin extends Component
{
    public function render()
    {
        return view('livewire.user-login')->layout('layouts.default', ["title" => "Login"]);
    }
}
