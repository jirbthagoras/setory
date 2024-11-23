<?php

namespace App\Services\User\Chat;

use App\Models\Chat;
use App\Models\Reply;

trait UserChatService
{
    public function createChat(string $message)
    {
        Chat::query()->create([
           "message" => $message,
            "user_id" => auth()->id()
        ]);

        return "Chat created";
    }

    public function createReply(string $message, int $chat_id)
    {
        Chat::query()->create([
            "message" => $message,
            "user_id" => auth()->id(),
            "chat_id" => $chat_id
        ]);

        return "Reply created";
    }

    public function deleteChat(int $chat_id)
    {
        Chat::query()->where('id', $chat_id)->delete();

        return "Chat deleted";
    }

    public function getAllChat()
    {
        return Chat::query()->orderBy('created_at', 'desc')->get()->toArray();
    }
}
