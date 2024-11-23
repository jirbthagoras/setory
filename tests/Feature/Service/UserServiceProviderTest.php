<?php

namespace Tests\Feature\Service;

use App\Models\Score;
use App\Models\Subject;
use App\Models\User;
use App\Services\User\UserService;
use Database\Seeders\ScoreSeeder;
use Database\Seeders\SubjectsSeeder;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class UserServiceProviderTest extends TestCase
{
    public UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();

        User::query()->truncate();
        Subject::query()->truncate();
        Score::query()->truncate();

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

    public function testGetScore()
    {

        $this->testLogin();

        $this->seed([SubjectsSeeder::class, ScoreSeeder::class]);

        assertEquals(Score::query()
            ->where('user_id', "=", 1)
            ->where('subject_id', "=", 1)
            ->first(), $this->userService->getScore(1));

    }

    public function testCreateScore()
    {
        $this->testLogin();

        $this->seed(SubjectsSeeder::class);

        assertEquals("Score successfully created", $this->userService->createScore(1, 100));
    }


}
