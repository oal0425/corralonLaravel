<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proveedor::create([
            'id' => '30501111127',
            'razon_social' =>'Holcim',
            'domicilio_proveedor' => 'HUMBERTO PRIMO 680',
            'telefono_proveedor' =>'',
            'localidad_proveedor' =>'CORDOBA - CORDOBA',
        ]);

        Proveedor::create([
            'id' => '30709640492',
            'razon_social' =>'HIMETAL S.A',
            'domicilio_proveedor' => 'SALTA',
            'telefono_proveedor' =>'',
            'localidad_proveedor' =>'SALTA',
        ]);
    }
}
