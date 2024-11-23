<?php

namespace App\Services\User\Logout;

trait UserLogoutService
{
    public function logout()
    {
        auth()->logout();
    }
}
