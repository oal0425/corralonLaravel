<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneradorController extends Controller
{
    public function imprimir (){
        $clientes = Cliente::all();
        $pdf = PDF::loadView('clientes_datos',compact('clientes'));
        return $pdf->download('clientes_datos.pdf');
    }
}
