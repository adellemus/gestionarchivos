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
        $role = Role::create(['name' => 'SuperUsuario']);
        $Permission = Permission::create(['name' => 'ver_panel']);
        $SuperUsuario=new user();
        $SuperUsuario->name='admin';
        $SuperUsuario->email="admin@admin.com";
        $SuperUsuario->password=Hash::make('admin');
        $SuperUsuario->save();
        $role->givePermissionTo('ver_panel');
        $SuperUsuario->givePermissionTo('ver_panel');
        $SuperUsuario->assignRole('SuperUsuario');
         \App\Models\User::factory(20)->create();
        
    }
}
