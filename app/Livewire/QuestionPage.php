<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;
use mysql_xdevapi\Session;

class QuestionPage extends Component
{
    public $subjectId;
    public $questions;
    public $questionCompleted = false;
    public $currentQuestionIndex = 0;
    public $selectedOption;
    public $score;

    public function mount()
    {
        $this->questions = Question::query()
            ->where('subject_id', $this->subjectId)
            ->get();
    }

    public function nextQuestion()
    {
        $this->currentQuestionIndex++;

        $this->questions->shift();
    }

    public function selectOption($optionId)
    {
        $this->selectedOption = $optionId;
    }

    public function render()
    {
        return view('livewire.question-page', [
            'currentQuestion' => $this->questions[0] ?? null,
        ])
            ->layout('layouts.app', [
                "title" => "{$this->subjectId} Question",
            ]);
    }
}
