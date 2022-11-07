<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Cervesa estandar',
            'precio' => '35'
        ]);
    }
}
