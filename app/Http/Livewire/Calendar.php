<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public $start;
    public $end;

    public function render()
    {
        return view('livewire.calendar');
    }
}
