<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question = Question::query()->first();

        Option::query()->create([
            "name" => "A",
            "description" => "Desc 1",
            "question_id" => $question->id
        ]);
        Option::query()->create([
            "name" => "B",
            "description" => "Desc 2",
            "question_id" => $question->id
        ]);
        Option::query()->create([
            "name" => "C",
            "description" => "Desc 3",
            "question_id" => $question->id
        ]);
        Option::query()->create([
            "name" => "D",
            "description" => "Desc 4",
            "is_right" => true,
            "question_id" => $question->id
        ]);
    }
}
