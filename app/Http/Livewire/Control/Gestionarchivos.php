<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\models\archivo;



class Gestionarchivos extends Component
{
    use WithFileUploads;
    public $vista=0;
    public $archivo;
    public $archivos;
    public $accion=0;
    public $categorias;
    public $categoria_select;
    protected $rules = [ 
        
        'archivo' => 'required', 
    ];
    public function render()
    {
        $this->archivos=archivo::all();
        
        return view('livewire.control.gestionarchivos');
    }
    public function save()
    {
        $this->validate();

        $file=new archivo();
      
        $file->url= 'storage/'.$this->archivo->store('archivos','public'); 
        $file->name=$this->archivo->getClientOriginalName();
        $file->extencion=$this->archivo->getClientOriginalExtension();
        $file->save();

        

    }
}
