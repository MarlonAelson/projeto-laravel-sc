<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PermissaoUsuario;

class PermissaoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #permissoes do usuario administrador
        PermissaoUsuario::create([
            'permission_id' => '1', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '2', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '3', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '4', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '5', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '6', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '7', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '8', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '1'
        ]);

        #permissao do usuário comum
        PermissaoUsuario::create([
            'permission_id' => '5', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '2'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '6', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '2'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '7', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '2'
        ]);

        PermissaoUsuario::create([
            'permission_id' => '8', 
            'model_type' => 'App\\Models\\User',
            'model_id' => '2'
        ]);
    }
}
