<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $usuarios = User::all();
        $detalles = Detalle::all();
        return view('comprobante.index', compact('comprobantes','usuarios', 'detalles'));
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
    public function store(Detalle $detalle)
    {
        $comprobantes = new Comprobante;
        $comprobantes->id_usuario = auth()->id;
        $comprobantes->id_detalle =$detalle->id;
        $comprobantes->fecha = now();
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
        $comprobantes = Comprobante::find($id);
        $comprobantes->tipo = $request->input('tipo');
        $comprobantes->fecha = $request->input('fecha');
        $comprobantes->id_usuario = $request->input('id_usuario');
        $comprobantes->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comprobantes = Comprobante::find($id);
        $comprobantes->delete();
        return redirect()->back();
    }
}
