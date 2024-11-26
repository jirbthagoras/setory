<?php

namespace App\Livewire;

use App\Exceptions\UserException;
use App\Services\User\UserService;
use http\Env\Response;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginPage extends Component
{
    public string $email = "";
    public string $password = "";

    public function mount()
    {
        $this->email = session('email') ? session('email', $this->email) : "" ;
    }

    protected array $rules = [
        "email" => ["required", "email", "exists:users,email"],
        "password" => ["required", "min:8"],
    ];

    public function login(UserService $userService) {
        $credentials = $this->validate();

        try {
            $userService->login($credentials);
            return response()->redirectTo(route("home-page"));
        } catch (UserException $exception) {
            $this->addError('error', $exception->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.login-page')
        ->layout('layouts.default', ["title" => "Login"]);
    }
}
