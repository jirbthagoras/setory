<?php

namespace App\Services\User;

use App\Services\User\Login\UserLoginService;
use App\Services\User\Register\UserRegisterService;

class
UserService
{
    use UserLoginService;
    use UserRegisterService;
}
