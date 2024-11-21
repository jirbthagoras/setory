<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::query()->create([
            "name" => "image 1",
            "link" => "https://www.berak.com/"
        ]);
    }
}
