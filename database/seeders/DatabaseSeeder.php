<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'SuperUsuario']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'HHRR']);
        $Permission1 = Permission::create(['name' => 'panel.link'])->assignRole($role3,$role2);//linl de panel o dasboart
        $Permission2 = Permission::create(['name' => 'panel.user'])->assignRole($role3);//link de usuarios en panel
        $Permission4 = Permission::create(['name' => 'user.create'])->assignRole($role3);//crear usuario
        $Permission5 = Permission::create(['name' => 'user.update'])->assignRole($role3);//actualizar usuario
        $Permission6 = Permission::create(['name' => 'user.delete'])->assignRole($role3);//eliminar usuario
        $Permission3 = Permission::create(['name' => 'panel.rolyper'])->assignRole($role2);//link de roles y permisos en panel
        

        $SuperUsuario=new user();
        $SuperUsuario->name='admin';
        $SuperUsuario->email="admin@admin.com";
        $SuperUsuario->password=Hash::make('admin');
        $SuperUsuario->save();
        $SuperUsuario->assignRole('SuperUsuario');
         \App\Models\User::factory(100)->create();
        
    }
}
