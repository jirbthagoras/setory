<?php

namespace App\Services\User\Register;

use App\Models\User;

trait UserRegisterService
{
    public function register(array $data): void
    {
        User::query()
            ->create($data);
    }
}
