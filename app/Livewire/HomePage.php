<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Subject;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {

//        dd(Subject::query()
//            ->where("category", "=", "culinary")
//            ->get());

        return view('livewire.home-page',[
            "subjects" => Subject::query()
            ->where("category", "building")
            ->limit(5)
            ->with("image")
            ->get(),
            "culinaries" => Subject::query()
            ->where("category", "=", "culinary")
            ->get(),
            "events" => Event::all()
            ])
            ->layout('layouts.app', ["title" => "Home"]);
    }
}
