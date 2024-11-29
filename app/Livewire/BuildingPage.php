<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class BuildingPage extends Component
{
    public function render()
    {
        return view('livewire.building-page',
        [
            "buildings" => Subject::query()
            ->where('category', "building")
            ->get(),
        ])
            ->layout('layouts.app', ['title' => "Tour"]);
    }
}
