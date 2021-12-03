<?php

namespace App\Observers;

class PeopleObserver
{
    public function created($people)
    {
       info($people->getDirty());
    }
}
