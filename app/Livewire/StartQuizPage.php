<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class StartQuizPage extends Component
{
    public $subject;
    public $score;
    public $user;

    public function mount($subject_id)
    {
        $this->user = auth()->user();

        if (!$this->subject = Subject::query()->find($subject_id))
        {
            return response()->redirectTo('not-found');
        }

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
