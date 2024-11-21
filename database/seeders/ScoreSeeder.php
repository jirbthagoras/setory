<?php

namespace Database\Seeders;

use App\Models\Score;
use App\Models\Subject;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::query()->first();
        $user = \App\Models\User::query()->first();

        Score::query()->create([
            "score" => 100,
            "subject_id" => $subject->id,
            "user_id" => $user->id,
        ]);

    }
}
