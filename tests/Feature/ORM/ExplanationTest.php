<?php

namespace Tests\Feature\ORM;

use App\Models\Explanation;
use App\Models\Image;
use App\Models\Subject;
use Database\Seeders\ExplanationsSeeder;
use Database\Seeders\ImagesSeeder;
use Database\Seeders\SubjectsSeeder;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class ExplanationTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    protected function setUp(): void
    {
        parent::setUp();

        Subject::query()->truncate();
        Image::query()->truncate();
        Explanation::query()->truncate();
    }

    public function testRelationWithSubjectImage(): void
    {
        $this->seed([ImagesSeeder::class, SubjectsSeeder::class, ExplanationsSeeder::class]);

        $subject = Subject::query()->first();
        $image = Image::query()->first();
        $explanation = Explanation::query()->first();

        assertEquals($subject->id, $explanation->subject->id);
        assertEquals($image->id, $explanation->image->id);
    }
}
