<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Detalle;
use App\Models\Producto;
use App\Models\comprobante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comprobantes = Comprobante::all();
        $detalles = Detalle::all();
        return view('comprobante.index', compact('comprobantes', 'detalles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    static public function store(Detalle $detalle)
    {
        $comprobantes = new Comprobante;
        $comprobantes->id_detalle =$detalle->id;
        $comprobantes->total->$detalle->total_venta;
        $comprobantes->fecha = $detalle->fecha;
        $comprobantes->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(comprobante $comprobante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comprobante $comprobante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        /*
        $comprobantes = Comprobante::find($id);
        //$comprobantes->fecha = $request->input('fecha');
        $comprobantes->id_usuario = $request->input('id_usuario');
        $comprobantes->save();
        return redirect()->back();
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        /*
        $comprobantes = Comprobante::find($id);
        $comprobantes->delete();
        return redirect()->back();
        */
    }
}
