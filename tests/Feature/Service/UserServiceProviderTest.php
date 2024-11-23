<?php

namespace Tests\Feature\Service;

use App\Services\User\UserService;
use Tests\TestCase;

class UserServiceProviderTest extends TestCase
{
    public UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }


    /**
     * A basic feature test example.
     */
    public function testUserServiceProvider(): void
    {
        self::assertInstanceOf(UserService::class, $this->userService);
    }
}
