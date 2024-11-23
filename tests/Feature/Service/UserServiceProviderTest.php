<?php

namespace Tests\Feature\Service;

use App\Models\User;
use App\Services\User\UserService;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class UserServiceProviderTest extends TestCase
{
    public UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();

        User::query()->truncate();

        $this->userService = $this->app->make(UserService::class);
    }


    /**
     * A basic feature test example.
     */
    public function testUserServiceProvider(): void
    {
        self::assertInstanceOf(UserService::class, $this->userService);
    }

    public function testRegister(): void
    {
        $this->userService->register([
            "name" => "John Doe",
            "email" => "john@doe.com",
            "password" => "password"
        ]);

        self::assertEquals(1, User::all()->count());
        self::assertEquals("John Doe", User::all()->first()->name);
    }

    public function testLogin()
    {
        $this->testRegister();

        $this->userService->login([
            "email" => "john@doe.com",
            "password" => "password"
        ]);

        self::assertEquals("john@doe.com", auth()->user()->email);
    }

    public function testLogout() {
        $this->testLogin();

        $this->userService->logout();

        self::assertEquals(null, auth()->user());
    }


}
