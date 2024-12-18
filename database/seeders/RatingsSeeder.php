<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Subject;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::query()->first();
        $user = \App\Models\User::query()->first();

        Rating::query()->create([
            "rate" => 5,
            "comment" => "Comment 1",
            "subject_id" => $subject->id,
            "user_id" => $user->id,
        ]);
    }
}
