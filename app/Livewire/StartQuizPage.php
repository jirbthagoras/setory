<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class StartQuizPage extends Component
{
    public $subject;
    public $score;
    public $user;

    public function mount($subject_id)
    {
        $this->user = auth()->user();
        $this->subject = Subject::query()->find($subject_id);
        $this->score = $this->subject->scores->where("user_id", "=", $this->user->id)->first();
    }

    public function startQuiz()
    {
        return response()->redirectTo("/quiz/{$this->subject->id}")->with('redirect_allowed', true);
    }

    public function render()
    {
        return view('livewire.start-quiz-page')
            ->layout("layouts.app", ["title" => "Quiz for {$this->subject->name}"]);
    }
}
