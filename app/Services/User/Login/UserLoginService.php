<?php

namespace App\Services\User\Login;

use App\Exceptions\UserException;

trait UserLoginService
{
    public function login(array $data) {
        if(! auth()->attempt($data)) {
            throw UserException::loginFailed();
        }
    }
}
