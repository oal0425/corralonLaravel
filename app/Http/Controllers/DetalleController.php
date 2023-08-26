<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Producto;
use App\Models\Comprobante;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalles = Detalle::all();
        $productos = Producto::all();
        $comprobantes = Comprobante::all();
        return view('detalle.index', compact('detalles','productos','comprobantes'));

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
    public function store(Request $request)
    {
        $detalles = new Detalle;
        $detalles->id_comprobante = $request->input('id_comprobante');
        $detalles->id_producto = $request->input('id_producto');
        $detalles->cantidad = $request->input('cantidad');
        $detalles->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(detalle $detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detalle $detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detalles = Detalle::find($id);
        $detalles->cantidad = $request->input('cantidad');
        $detalles->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detalles = Detalle::find($id);
        $detalles->delete();
        return redirect()->back();
    }
}
