<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::query()
        ->create([
            "user_id" => 1,
            "chat_id" => 1,
            "message" => "Ini reply king",
        ]);
    }
}
