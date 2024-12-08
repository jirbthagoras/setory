<?php

namespace App\Livewire;

use App\Models\Rating;
use Livewire\Component;

class RatingComponent extends Component
{
    public $user;
    public $subjectId;
    public int $rating = 1;
    public string $comment;
    public $userRating;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function createRating()
    {
        Rating::query()
            ->create([
                "user_id" => $this->user->id,
                "subject_id" => $this->subjectId,
                "rate" => $this->rating,
                "comment" => $this->comment
            ]);
    }

    public function deleteRating()
    {
        Rating::query()
            ->where('user_id', $this->user->id)
            ->where('subject_id', $this->subjectId)
            ->delete();
    }

    public function render()
    {
        return view('livewire.rating-component', [
            "ratings" => Rating::query()
                ->where("subject_id", $this->subjectId)
                ->get(),
            "userRating" => $this->userRating = Rating::query()
                ->where("user_id", $this->user->id)
                ->where("subject_id", $this->subjectId)
                ->first()
        ]);
    }
}
