<?php

namespace App\Services\User;

use App\Services\User\Login\UserLoginService;
use App\Services\User\Logout\UserLogoutService;
use App\Services\User\Register\UserRegisterService;
use App\Services\User\Score\UserScoreService;

class
UserService
{
    use UserLoginService;
    use UserRegisterService;
    use UserLogoutService;
    use UserScoreService;
}
