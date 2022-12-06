<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Panel extends Component
{
    public $vista=3;

    public function render()
    {
        return view('livewire.panel');
    }
}
