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

        //barra de navegacion
        $Permission1 = Permission::create(['name' => 'nav.link.panel','descrip'=>'panel','seccion'=>'Barra de navegacion'])->assignRole($role3,$role2);//linl de panel o dasboart
        //user
        $Permission2 = Permission::create(['name' => 'panel.user','descrip'=>'Gestionar usuario','seccion'=>'Panel de Control'])->assignRole($role3);//link de usuarios en panel
        $Permission4 = Permission::create(['name' => 'user.create','descrip'=>'crear usuario','seccion'=>'Vista de usuario'])->assignRole($role3);//crear usuario
        $Permission5 = Permission::create(['name' => 'user.update','descrip'=>'actializar usuario','seccion'=>'Vista de usuario'])->assignRole($role3);//actualizar usuario
        $Permission6 = Permission::create(['name' => 'user.delete','descrip'=>'eliminar usuario','seccion'=>'Vista de usuario'])->assignRole($role3);//eliminar usuario
        $Permission6 = Permission::create(['name' => 'user.modfi.vista','descrip'=>'ver roles y permisos','seccion'=>'Vista de usuario'])->assignRole($role3);//eliminar usuario
        $Permission6 = Permission::create(['name' => 'user.asignar.roles','descrip'=>'asignar roles a usuarios','seccion'=>'Vista de usuario'])->assignRole($role3);//eliminar usuario
        $Permission6 = Permission::create(['name' => 'user.asifnar.permisos','descrip'=>'asignar permisos a usuarios','seccion'=>'Vista de usuario'])->assignRole($role3);//eliminar usuario
        //panel
        $Permission3 = Permission::create(['name' => 'panel.rolyper','descrip'=>'link de roles y permisos en panel','seccion'=>'Panel de Control'])->assignRole($role2);//link de roles y permisos en panel
        

        $SuperUsuario=new user();
        $SuperUsuario->name='admin';
        $SuperUsuario->email="admin@admin.com";
        $SuperUsuario->password=Hash::make('admin');
        $SuperUsuario->save();
        $SuperUsuario->assignRole('SuperUsuario');
         \App\Models\User::factory(50)->create();
        
    }
}
