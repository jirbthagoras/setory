<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class CulinaryPage extends Component
{
    public function render()
    {
        return view('livewire.culinary-page', [
            "culinaries" => Subject::query()
            ->where("category", "culinary")
            ->get(),
        ])
            ->layout('layouts.app', ['title' => "Culinary"]);
    }
}
