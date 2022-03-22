<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Iniciante', 'Intermediário', 'Avançado', 'Domínio'];

        foreach($data as $item) {
           Level::create(['name' => $item])  ;
        }
    }
}
