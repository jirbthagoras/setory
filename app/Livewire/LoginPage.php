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
    public string $email;
    public string $password;

    protected array $rules = [
        "email" => ["required", "email", "exists:users,email"],
        "password" => ["required", "min:8"],
    ];

    public function login(UserService $userService) {
        $credentials = $this->validate();

        try {
            $userService->login($credentials);
            return response()->redirectTo(route("check"));
        } catch (UserException $exception) {
            $this->addError('error', $exception->getMessage());
//            return \response()->redirectTo(route('login-page'));
        }
    }

    public function render()
    {
        return view('livewire.login-page')
        ->layout('layouts.default', ["title" => "Login"]);
    }
}
