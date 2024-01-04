<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role;//Usado para trabalhar permissões por meio de papeis (admin, usuário comum)
use Spatie\Permission\Models\Permission;//Usado para permissões de forma individual 



class PermissoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #permissoes de animais
        Permission::create(['name' => 'animal_listar']);
        Permission::create(['name' => 'animal_cadastrar']);
        Permission::create(['name' => 'animal_editar']);
        Permission::create(['name' => 'animal_deletar']);
        
        #permissoes de usuarios
        Permission::create(['name' => 'usuario_listar']);
        Permission::create(['name' => 'usuario_cadastrar']);
        Permission::create(['name' => 'usuario_editar']);
        Permission::create(['name' => 'usuario_deletar']);
    }
}
