<?php

namespace App\Livewire;

use App\Services\User\UserService;
use Livewire\Component;

class RegisterPage extends Component
{
    public string $name;
    public string $email;
    public string $password;

    protected $rules = [
        "name" => ['required', 'string', "max:40"],
        "email" => ["required", "email", "unique:users,email"],
        "password" => ["required", "string", "min:6"]
        ];

    public function create(UserService $userService) {
        $credentials = $this->validate();

        try {
            $userService->register($credentials);
            session()->flash('success', 'Akun telah dibuat, silahkan Log In sekarang!');
            session()->flash('email', $this->email);
            return response()->redirectTo(route("login-page"));
        } catch (\Exception $e) {
            $this->addError("register", $e->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.register-page')
        ->layout("layouts.default", ["title" => "Register"]);
    }
}
