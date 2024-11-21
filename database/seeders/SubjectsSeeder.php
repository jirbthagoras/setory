<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = Image::query()->first();

        Subject::query()->create([
            "name" => "subject 1",
            "location" => "location Subject 1",
            "description" => "description Subject 1",
            "category" => "building",
            "video" => "building",
            "image_id" => $image->id,
        ]);
    }
}
