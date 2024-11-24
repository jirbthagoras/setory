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
        $this->validate();

        try {
            $userService->register([
                "name" => $this->name,
                "email" => $this->email,
                "password" => $this->password,
            ]);
        } catch (\Exception $e) {
            $this->addError("register", $e->getMessage());
        }


        session()->flash('success', 'Akun telah dibuat, silahkan Log In sekarang!');
        session()->flash('email',$this->email);


        $this->reset(['name','email','password']);

        return response()->redirectTo(route("login-page"));
    }

    public function render()
    {
        return view('livewire.register-page')
        ->layout("layouts.default", ["title" => "Register"]);
    }
}
