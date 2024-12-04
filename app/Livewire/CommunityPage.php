<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;

class CommunityPage extends Component
{
    public string $text = "";

    public function sendMessage()
    {
        Chat::query()
            ->create([
               "user_id" => auth()->id(),
               "message" => $this->text,
            ]);

    }

    public function render()
    {
        return view('livewire.community-page', [
            "messages" => Chat::query()
                ->orderBy('created_at', 'asc')
                ->take(10)
                ->get(),
        ])
            ->layout('layouts.app', ["title" => "Community"]);
    }
}
