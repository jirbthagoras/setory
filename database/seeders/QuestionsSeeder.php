<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::query()->first();
        $image = Image::query()->first();

        Question::query()->create([
            "name" => "question 1",
            "description" => "desc 1",
            "subject_id" => $subject->id,
            "image_id" => $image->id,
        ]);

        Question::query()->create([
            "name" => "question 2",
            "description" => "desc 2",
            "subject_id" => $subject->id,
        ]);
    }
}
