<?php

namespace App\Services\User\Subject;

use App\Models\Subject;

trait UserSubjectService
{
    public function getAllSubjects()
    {
        return Subject::all()->toArray();
    }

    public function getSubject($subject_id)
    {
        return Subject::query()
            ->with('explanations')
            ->with('coordinates')
            ->find($subject_id)
            ->toArray();
    }
}
