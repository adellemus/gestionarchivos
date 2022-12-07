<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\models\archivo;
use Spatie\Permission\Models\Permission;



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
        $file->nombre_permiso=uniqid('archivo-');
        $file->user_id=auth()->user()->id;
        $file->save();
        $permission=Permission::create(['tipo'=>'archivo','guard_name'=>'web','name' =>$file->nombre_permiso ,'descrip'=>'','seccion'=>'']);
        auth()->user()->givePermissionTo($permission);
        
       

    }
/*         public function cambio($sortOrder, $previousSortOrder, $name, $from, $to)
    {


        // $sortOrder = elementos del contenedor
        // $previousSortOrder = keys previous order
        // $name = drop target name
        // $from =nombre del contenedor
        // $to = name of drop target to where the dragged/sorted item was placed
    } */
}
