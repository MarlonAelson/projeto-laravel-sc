<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        Animal::create(['id'=> 1, 'nome' => 'Marley', 'raca' => 'Gold']);
        Animal::create(['id'=> 2, 'nome' => 'Bob', 'raca' => 'Vira-Lata']);
        Animal::create(['id'=> 3, 'nome' => 'Lobo', 'raca' => 'Poodle']);
    }
}
