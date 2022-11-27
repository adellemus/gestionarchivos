<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class Gestionusuario extends Component
{
    public $updateMode = 4;
    public $user;
    public $users;
    public $rolesall;
    public $roles;
    public $password;
    public $password_confirmation;
    
    protected $rules=[
        'user.name'=>'required',
        'user.email'=>'required|email|unique:App\Models\User,email',
        'password'=> 'required|min:6|confirmed',
        'password_confirmation'=>'min:6',
    ];
        public function mount(){
            $this->user=new user();
            $this->rolesall=Role::all();
    
        }
        public function render(){
            $this->users=user::all();
                    return view('livewire.control.gestionusuario');
        }
        public function delete(user $user){

            $user->delete();

        }
        public function store(){
            $this->validate();
            $this->user->password=Hash::make($this->password);
            $this->user->save();
            $this->resertimput();

        }
        public function edit(user $user){

            $this->updateMode=2;
            $this->user=$user;

        }
        public function update(){
            $this->user->delete();
            $this->validate();
            $this->user->password=Hash::make($this->password);
            $this->user->save();
            $this->resertimput();
        }
        public function vconfi(user $user){
            $this->user=$user;
            $this->updateMode=3;
        }
        public function btnagregar(){
           
            $this->resertimput();
            $this->updateMode=1;
        }
        private function resertimput(){

            $this->user=new user();
            $this->password="";
            $this->password_confirmation="";
            $this->updateMode=4;
        }
}
