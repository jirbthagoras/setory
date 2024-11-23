<?php

namespace App\Services\User;

use App\Services\User\Chat\UserChatService;
use App\Services\User\Login\UserLoginService;
use App\Services\User\Logout\UserLogoutService;
use App\Services\User\Rating\UserRatingService;
use App\Services\User\Register\UserRegisterService;
use App\Services\User\Score\UserScoreService;
use App\Services\User\Subject\UserSubjectService;

class
UserService
{
    use UserLoginService;
    use UserRegisterService;
    use UserLogoutService;
    use UserScoreService;
    use UserChatService;
    use UserSubjectService;
    use UserRatingService;
}
