<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;

class ChatComponent extends Component
{
    public string $text = "";
    public $replyId;

    public function reply($replyId)
    {
        $this->replyId = $replyId;
    }

    public function sendReply()
    {
        Chat::query()
            ->create([
                "user_id" => auth()->id(),
                "chat_id" => $this->replyId,
                "message" => $this->text,
            ]);

        $this->reset(['text', 'replyId']);

    }

    public function sendMessage()
    {
        Chat::query()
            ->create([
                "user_id" => auth()->id(),
                "message" => $this->text,
            ]);

        $this->reset('text');

    }

    public function render()
    {
        return view('livewire.chat-component', [
            "messages" => Chat::query()
            ->orderBy('created_at', 'asc')
                ->take(50)
                ->get(),
            "reply" => Chat::query()->find($this->replyId)
        ]);
    }
}
