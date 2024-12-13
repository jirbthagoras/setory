<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Score;
use Livewire\Component;

class QuestionPage extends Component
{
    public $subject_id;
    public $questions;
    public $currentQuestionIndex = 0;
    public $selectedOption = null;
    public $score = 0;
    public $checked = false;
    public $wrongMessage = null;
    public bool $correct;

    public function mount($subject_id)
    {
        $this->subject_id = $subject_id;
        $this->questions = Question::with('options', 'image')
            ->where('subject_id', $subject_id)
            ->get();
    }

    public function checkAnswer()
    {
        if (!$this->selectedOption) return; // Ensure an option is selected before proceeding.

        $currentQuestion = $this->questions[$this->currentQuestionIndex];
        $correctOption = $currentQuestion->options->firstWhere('is_right', true);

        if ($this->selectedOption == $correctOption->id) {
            $this->score++;
            $this->wrongMessage = null;
            $this->correct = true;
        } else {
            $this->wrongMessage = $currentQuestion->wrong_message;
        }

        $this->checked = true;
    }



    public function nextQuestion()
    {
        if ($this->currentQuestionIndex < $this->questions->count() - 1) {
            $this->currentQuestionIndex++;
            $this->resetState();
        } else {
            $this->finishQuiz(); // Handle quiz completion.
        }
    }

    private function resetState()
    {
        $this->selectedOption = null;
        $this->checked = false;
        $this->wrongMessage = null;
        $this->correct = false;
    }

    protected function finishQuiz()
    {
        $existingScore = Score::where('user_id', auth()->id())
            ->where('subject_id', $this->subject_id)
            ->first();

        if ($existingScore) {
            $existingScore->update(['score' => $this->score]);
        } else {
            Score::create([
                'user_id' => auth()->id(),
                'subject_id' => $this->subject_id,
                'score' => $this->score,
            ]);
        }

        session()->flash('message', 'Quiz completed! Your score is ' . $this->score);
        return redirect("/start-quiz/{$this->subject_id}");
    }


    public function render()
    {
        return view('livewire.question-page', [
            'currentQuestion' => $this->questions[$this->currentQuestionIndex],
        ])->layout('layouts.default', ['title' => "Quiz"]);
    }
}
