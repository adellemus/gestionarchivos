<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Permisologia extends Component
{
    public $usuarios;

    public function mount(){
        $this->usuarios = user::all();
    }

    public function render()
    {        
        return view('livewire.permisologia');        
    
    }

}
