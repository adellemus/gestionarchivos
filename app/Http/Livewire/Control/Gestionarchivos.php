<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\models\archivo;
use App\models\departamento;
use App\models\categoria;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Collection;


class Gestionarchivos extends Component
{
    use WithFileUploads;
    public $open = false ;
    public $id_departamento;
    public $id_categoria;
    public $archivo;
    public $archivos;
    public $accion=0;
    public $roles;
    public $categoria_select;
    public $departamentos;
    public $categorias;
    protected $rules = [ 
        
        'archivo' => 'required', 
    ];
    public function mount(){
        $this->open=false;
        $this->categorias=new Collection();
        $this->users=new Collection();

    }
    public function render()
    {
        $this->archivos=archivo::all();
        $this->departamentos=departamento::all();
        $this->roles=role::where('name','!=','SuperUsuario')->get();
        return view('livewire.control.gestionarchivos');
    }
    public function save()
    {
        $this->validate();

        $file=new archivo();
      
        $file->url= 'storage/'.$this->archivo->store('archivos','public'); 
        $file->name=$this->archivo->getClientOriginalName();
        $file->extencion=$this->archivo->getClientOriginalExtension();
        $file->categoria_id=$this->id_categoria;
        
        $file->nombre_permiso=uniqid('archivo-');
        $file->user_id=auth()->user()->id;
        $file->save();
        $permission=Permission::create(['tipo'=>'archivo','guard_name'=>'web','name' =>$file->nombre_permiso ,'descrip'=>'','seccion'=>'']);
         auth()->user()->givePermissionTo($permission);
        
       

    }
    public function cargar_select_categoria(){
        $this->categorias=categoria::where('departamento_id','=',$this->id_departamento)->get();
        
    }
}
