<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Cemento',
            'details' => 'Cemento Portland',
            'price' => 1800,
            'description' => 'Cemento Portland Calcareo',
            'stock_actual'=>150,
            'stock_minimo'=>50,
            'stock_repo'=>30,
            'id_proveedor' => 30501111127,
            'image_path' => 'cemento.png'
        ]);

        Product::create([
            'name' => 'Cal',
            'details' => 'Cal Maria Virginia',
            'price' => 800,
            'description' => 'Cal Hidratada',
            'stock_actual'=>250,
            'stock_minimo'=>50,
            'stock_repo'=>30,
            'id_proveedor' => 30501111127,
            'image_path' => 'cemento.png'
        ]);

        Product::create([
            'name' => 'Pegamento Weber',
            'details' => 'Pegamento para pisos',
            'price' => 1600,
            'description' => 'Pegamento para pisos comun',
            'stock_actual'=>350,
            'stock_minimo'=>40,
            'stock_repo'=>20,
            'id_proveedor' => 30501111127,
            'image_path' => 'cemento.png'
        ]);
    }
}
