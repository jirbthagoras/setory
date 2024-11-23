<?php

namespace Tests\Feature\ORM;

use App\Models\Image;
use App\Models\Question;
use App\Models\Rating;
use App\Models\Subject;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\ImagesSeeder;
use Database\Seeders\RatingsSeeder;
use Database\Seeders\SubjectsSeeder;
use Tests\TestCase;

class RatingTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        Subject::query()->truncate();
        User::query()->truncate();
        Image::query()->truncate();
        Question::query()->truncate();
        Rating::query()->truncate();
    }
    /**
     * A basic feature test example.
     */
    public function testRelationWithRating(): void
    {
        $this->seed([DatabaseSeeder::class,ImagesSeeder::class, SubjectsSeeder::class, RatingsSeeder::class]);

        $rating = Rating::query()->first();

        var_dump($rating->subject->toArray());
    }
}
