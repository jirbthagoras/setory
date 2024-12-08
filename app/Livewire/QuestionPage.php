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
    public $wrongMessage = null;

    public function mount($subject_id)
    {
        $this->subject_id = $subject_id;
        $this->questions = Question::with('options', 'image')
            ->where('subject_id', $subject_id)
            ->get();
    }

    public function checkAnswer()
    {
        $currentQuestion = $this->questions[$this->currentQuestionIndex];

        $correctOption = $currentQuestion->options->firstWhere('is_right', true);

        if ($this->selectedOption == $correctOption->id) {
            $this->score++;
            $this->wrongMessage = null;
        } else {
            $this->wrongMessage = $currentQuestion->wrong_message;
            session()->flash("wrongMessage", $this->wrongMessage);
        }

        $this->nextQuestion();
    }

    public function nextQuestion()
    {
        if ($this->currentQuestionIndex < $this->questions->count() - 1) {
            $this->currentQuestionIndex++;
            $this->selectedOption = null;
            $this->wrongMessage = null;
        } else {
            $this->finishQuiz();
        }
    }

    protected function finishQuiz()
    {
        // Check if a score record already exists for this user and subject
        $existingScore = Score::where('user_id', auth()->id())
            ->where('subject_id', $this->subject_id)
            ->first();

        if ($existingScore) {
            // Update the existing score
            $existingScore->update(['score' => $this->score]);
        } else {
            // Create a new score record
            Score::create([
                'user_id' => auth()->id(),
                'subject_id' => $this->subject_id,
                'score' => $this->score,
            ]);
        }

        // Redirect with a completion message
        session()->flash('message', 'Quiz completed! Your score is ' . $this->score);
        return redirect("/start-quiz/{$this->subject_id}"); // Change this to the desired route
    }

    public function render()
    {
        return view('livewire.question-page', [
            'currentQuestion' => $this->questions[$this->currentQuestionIndex],
        ])->layout('layouts.app', ['title' => "question"]);
    }
}
