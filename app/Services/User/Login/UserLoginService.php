<?php

namespace App\Services\User\Login;

trait UserLoginService
{
    public function login(array $data) {

        auth()->attempt($data);

        auth()->user();

        return "User successfully logged in";

    }
}
