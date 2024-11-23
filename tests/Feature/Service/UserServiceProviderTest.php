<?php

namespace Tests\Feature\Service;

use App\Models\Chat;
use App\Models\Rating;
use App\Models\Reply;
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
        Chat::query()->truncate();
        Rating::query()->truncate();

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

        $this->seed([SubjectsSeeder::class, ScoreSeeder::class]);

        assertEquals("Score successfully created", $this->userService->createScore(1, 100));
    }

    public function testUpdateScore()
    {
        $this->testCreateScore();

        var_dump($this->userService->updateScore(1, 90));
    }


    public function testCreateChat()
    {

        $this->testLogin();

        assertEquals('Chat created', $this->userService->createChat("Ini chat"));

    }

    public function testCreateReply()
    {
        $this->testCreateChat();

        assertEquals('Reply created', $this->userService->createReply("Ini Reply", 1));

        $reply = Chat::query()->has('chat')->first();

    }

    public function testDeleteChat()
    {

        $this->testCreateChat();

        assertEquals("Chat deleted", $this->userService->deleteChat(1));

    }

    public function testGetAllChat()
    {
        $this->testCreateReply();

        var_dump($this->userService->getAllChat());
    }

    public function testGetAllSubjects()
    {
        var_dump($this->userService->getAllSubjects());

        self::assertTrue(true);
    }

    public function testGetSubject()
    {
        var_dump($this->userService->getSubject(1));

        self::assertTrue(true);
    }

    public function testCreateRating()
    {

        $this->testLogin();

        $this->seed([SubjectsSeeder::class]);

        assertEquals("Rating created", $this->userService->createRating(1, "huh", 1));

    }

    public function testGetCurrentRating()
    {

        $this->testCreateRating();

        $this->userService->currentRating(1)->toArray();

    }

    public function testUpdateRating()
    {

        $this->testGetCurrentRating();

        $this->userService->updateRating(1, "comment baru", 1)->toArray();

    }

    public function testGetAllRatings()
    {

        $this->testUpdateRating();

        var_dump($this->userService->getAllRatings());

    }

    public function testGetAllEvents()
    {

        var_dump($this->userService->getAllEvents());

    }


}
