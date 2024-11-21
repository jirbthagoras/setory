<?php

namespace Database\Seeders;

use App\Models\Explanation;
use App\Models\Image;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExplanationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::query()->first();
        $image = Image::query()->first();

        Explanation::query()->create([
            "name" => "Explanation 1 For Subject 1",
            "description" => "Desc 1",
            "subject_id" => $subject->id,
            "image_id" => $image->id,
        ]);
    }
}
