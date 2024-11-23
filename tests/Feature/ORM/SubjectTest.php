<?php

namespace Tests\Feature\ORM;

use App\Models\Image;
use App\Models\Question;
use App\Models\Score;
use App\Models\Subject;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\ImagesSeeder;
use Database\Seeders\QuestionsSeeder;
use Database\Seeders\ScoreSeeder;
use Database\Seeders\SubjectsSeeder;
use Tests\TestCase;

class SubjectTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Subject::query()->truncate();
        Image::query()->truncate();
        Question::query()->truncate();
        User::query()->truncate();
        Score::query()->truncate();
    }

    /**
     * A basic feature test example.
     */
    public function testRelationWithImage(): void
    {
        $this->seed([ImagesSeeder::class, SubjectsSeeder::class]);

        $subject = Subject::query()->first();
        $image = Image::query()->first();
        self::assertInstanceOf(Subject::class, $subject);
        self::assertEquals($image->id, $subject->image->id);
    }

    public function testRelationWithQuestion(): void {
        $this->seed([ImagesSeeder::class, SubjectsSeeder::class, QuestionsSeeder::class]);

        $subject = Subject::query()->first();
        self::assertTrue(true);

        var_dump($subject->questions);
    }

    public function testRelationWithScore()
    {

        $this->seed([ImagesSeeder::class, SubjectsSeeder::class, DatabaseSeeder::class, ScoreSeeder::class]);

        $subject = Subject::query()->first();
        $score = Score::query()->first();

        var_dump($score->user->toArray());

        var_dump($subject->score->toArray());

    }


}
