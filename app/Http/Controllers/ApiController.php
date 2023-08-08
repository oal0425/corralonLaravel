<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;



class ApiController extends Controller
{
    public function producto(Request $request){
        $productos = Producto::all();

        return response()->json($productos);
    }


}
