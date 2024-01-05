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
        #permissoes de usuarios
        Permission::create(['id' => 1, 'name' => 'usuario_listar']);
        Permission::create(['id' => 2, 'name' => 'usuario_cadastrar']);
        Permission::create(['id' => 3, 'name' => 'usuario_editar']);
        Permission::create(['id' => 4, 'name' => 'usuario_deletar']);

        #permissoes de animais
        Permission::create(['id' => 5, 'name' => 'animal_listar']);
        Permission::create(['id' => 6, 'name' => 'animal_cadastrar']);
        Permission::create(['id' => 7, 'name' => 'animal_editar']);
        Permission::create(['id' => 8, 'name' => 'animal_deletar']);
    }
}
