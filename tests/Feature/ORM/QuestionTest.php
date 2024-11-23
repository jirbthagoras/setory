<?php

namespace Tests\Feature\ORM;

use App\Models\Image;
use App\Models\Option;
use App\Models\Question;
use App\Models\Subject;
use Database\Seeders\ImagesSeeder;
use Database\Seeders\OptionsSeeder;
use Database\Seeders\QuestionsSeeder;
use Database\Seeders\SubjectsSeeder;
use Tests\TestCase;

class QuestionTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        Subject::query()->truncate();
        Image::query()->truncate();
        Question::query()->truncate();
        Option::query()->truncate();
    }
    /**
     * A basic feature test example.
     */
    public function testRelationWithOptions(): void
    {

        $this->seed([ImagesSeeder::class, SubjectsSeeder::class, QuestionsSeeder::class, OptionsSeeder::class]);

        $question = Question::query()->first();

        var_dump($question->options->toArray());

        $this->assertTrue(true);

    }
}
