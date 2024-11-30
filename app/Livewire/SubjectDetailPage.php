<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class SubjectDetailPage extends Component
{
    public string $id;

    public $subject;

    public function mount()
    {
        $this->subject = Subject::query()
        ->where('id', $this->id)
            ->with('image')
            ->with('coordinates')
        ->first();
    }

    public function render()
    {
        return view('livewire.subject-detail-page', [
            "subject" => $this->subject,
        ])
            ->layout('layouts.app', [
                "title" => "{$this->subject->name}",
            ]);
    }
}
