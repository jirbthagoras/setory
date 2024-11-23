<?php

namespace App\Services\User\Rating;

use App\Models\Rating;

trait UserRatingService
{
    public function createRating(int $rate, string $comment, int $subject_id)
    {
        Rating::query()->create([
            "rate" => $rate,
            "comment" => $comment,
            "subject_id" => $subject_id,
            "user_id" => auth()->id(),
        ]);

        return "Rating created";
    }

    public function currentRating(int $subject_id)
    {
        return Rating::query()
            ->where("user_id", auth()->id())
            ->where("subject_id", $subject_id)
            ->first();
    }

    public function updateRating(int $rate, string $comment, int $subject_id)
    {
        $rating = $this->currentRating($subject_id);

        $rating->rate = $rate;
        $rating->comment = $comment;

        $rating->save();

        return $rating;
    }

    public function getAllRatings()
    {
        return Rating::all()->toArray();
    }
}
