<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Panel extends Component
{
    public $vista;

    public function render()
    {
        return view('livewire.panel');
    }
}
