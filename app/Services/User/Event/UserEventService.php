<?php

namespace App\Services\User\Event;

use App\Models\Event;

trait UserEventService
{

    public function getAllEvents()
    {
        return Event::all()->toArray();
    }

}
