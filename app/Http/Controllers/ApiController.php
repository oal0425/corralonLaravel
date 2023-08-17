<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Cliente;
use App\Models\Carro;



class ApiController extends Controller
{
    public function producto(Request $request){
        $productos = Producto::all();

        return response()->json($productos);
    }

    public function proveedor(Request $request){
        $proveedores = Proveedor::all();

        return response()->json($proveedores);
    }

    public function cliente(Request $request){
        $clientes = Cliente::all();

        return response()->json($clientes);
    }

    public function carro( Request $request){
        $carros = Carro::all();

        return response()->json($carros);
    }


}
