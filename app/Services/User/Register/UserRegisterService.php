<?php

namespace App\Services\User\Register;

use App\Models\User;

trait UserRegisterService
{
    public function register(array $data)
    {
        User::query()
            ->create([
                "name" => $data["name"],
                "email" => $data["email"],
                "password"=> $data["password"],
            ]);
    }
}
