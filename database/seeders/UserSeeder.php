<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name'     => 'Administrador', 
                'email'    => 'adm@gmail.com', 
                'password' => bcrypt('123456')
            ]
        );

        User::create(
            [
                'name'     => 'Usuário Comum', 
                'email'    => 'usuario@gmail.com', 
                'password' => bcrypt('123456')
            ]
        );
    }
}
