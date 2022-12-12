<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;
use App\models\categoria;
use App\models\departamento;
use Illuminate\Support\Collection;

class Gestiondeparcategory extends Component
{
    public $departamentos;
    public $departamento_seleccionado;
    public $name_depart;
    public $ModeEdit='default';
    public $categorias;
    public $cuadro_cat='default';
    public $name_cat;
    protected $listeners = ['delete_depart','delete_cat'];
    protected $rules = [ 
        'name_depart'=>'required',
        
    ];
    public function mount(){
        $this->categorias=new Collection();
        $this->categorias->push(new categoria());
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

        $departamento->save();
        $this->clear();
        $this->emit('alert_create_dep');
    
    }
    public function delete_depart(departamento $departamento){
        $departamento->delete();
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
    
    }
    public function clear(){

        $this->ModeEdit='default';
        $this->cuadro_cat='default';
        $this->name_depart="";
        $this->name_cat="";
        
    }
    
}
