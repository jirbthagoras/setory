<?php

namespace App\Services\User\Score;

use App\Models\Score;

trait UserScoreService
{
    public function getScore(int $subject_id)
    {
        $user_id = auth()->id();

        if ($score = Score::query()
            ->where('user_id', "=", $user_id)
            ->where('subject_id', "=", $subject_id)
            ->first())
        {
            return $score;
        } else {
            return "No Score";
        }
    }

    public function createScore(int $subject_id, int $score)
    {
        Score::query()->create([
            "score" => $score,
            "subject_id" => $subject_id,
            "user_id" => auth()->user()->id
        ]);

        return "Score successfully created";
    }

    public function updateScore(int $subject_id,int $newScore)
    {
        $score = $this->getScore($subject_id);

        $score->score = $newScore;

        $score->save();

        return $score->toArray();
    }
}
