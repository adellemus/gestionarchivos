<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;
use App\models\categoria;
use App\models\departamento;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class Gestiondeparcategory extends Component
{
    public $departamentos;
    public $departamento_seleccionado;
    public $name_depart;
    public $ModeEdit='default';
    public $categorias;
    public $cuadro_cat='default';
    public $name_cat;
    public $select_rol=[];
    protected $listeners = ['delete_depart','delete_cat'];
    protected $rules = [ 
        'name_depart'=>'required',
        'select_rol'=>'required',
    ];
    public function mount(){
        $this->categorias=new Collection();
        $this->categorias->push(new categoria());
        $this->roles=role::where('name','!=','SuperUsuario')->get();
    }
    public function render()
    {   $this->departamentos=departamento::all();
        
        return view('livewire.control.gestiondeparcategory');
    }
    //departamento
    public function save_depart()
    {
        $this->validate();

        $departamento=new departamento();
        $departamento->name=$this->name_depart;
        $permiso=new permission();
        $permiso->name="departamento.".$departamento->name;
        $permiso->descrip="ver - ".$departamento->name;
        $permiso->tipo='departamento';
        $permiso->seccion='departamento';
        $permiso->guard_name="web";
        $permiso->save();
        $permiso->syncRoles($this->select_rol);
        $departamento->save();
       
        $this->clear();
        
        $this->emit('alert_create_dep');
    
    }
    public function delete_depart(departamento $departamento){
        $departamento->delete();
        $permiso=permission::where('name','=',"departamento.".$departamento->name);
        $permiso->delete();
        $this->clear();
    }
    public function edit_depart(departamento $departamento){

        $this->ModeEdit=1;
        $this->name_depart=$departamento->name;
        $this->departamento_seleccionado=$departamento;
        
    }
    public function update_depart(){
        $this->validate();
        $this->departamento_seleccionado->name=$this->name_depart;
        $this->departamento_seleccionado->save();
        $this->clear();
        $this->emit('alert_update_dep');
    }
    //categorias
    public function vercategorias(departamento $departamento){
        $this->cuadro_cat="1";
        $this->categorias=$departamento->categorias;
        $this->departamento_seleccionado=$departamento;

    }
    public function fcreate_categoria(departamento $departamento){

        $this->cuadro_cat=2;
        $this->departamento_seleccionado=$departamento;

    }
    public function save_cat()
    {

        $validatedData = $this->validate([
            'name_cat' => 'required',
        ]);

        $categoria=new categoria();
        $categoria->name=$this->name_cat;
        $categoria->departamento_id=$this->departamento_seleccionado->id;
        //crear el permiso
        $permiso_dela_categoria=new permission();
        $permiso_dela_categoria->name="categoria.".$categoria->name;
        $permiso_dela_categoria->descrip="ver - ".$categoria->name;
        $permiso_dela_categoria->tipo='categoria';
        $permiso_dela_categoria->seccion='categoria';
        $permiso_dela_categoria->guard_name="web";
        $permiso_dela_categoria->save();
        //
        $permiso_del_depar=permission::where('name','departamento.'.$this->departamento_seleccionado->name)->first();
        $permiso_dela_categoria->syncRoles($permiso_del_depar->roles);
        $categoria->save();
        $this->categorias=$this->departamento_seleccionado->categorias;
        $this->cuadro_cat="1";
        $this->name_cat="";
        
        $this->emit('alert_create_cat');
    
    }
    public function delete_cat(categoria $categoria){
        $categoria->delete();
        $this->departamento_seleccionado=departamento::find($this->departamento_seleccionado->id);
        $this->categorias=$this->departamento_seleccionado->categorias;
        $permiso=permission::where('name','=',"categoria.".$categoria->name);
        $permiso->delete();
    
    }
    public function clear(){

        $this->ModeEdit='default';
        $this->cuadro_cat='default';
        $this->name_depart="";
        $this->name_cat="";
        
    }
    
}
