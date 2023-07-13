<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carritos = Carro::all();
        $usuarios = User::all();
        $productos = Producto::all();
        return view('carrito.index', compact('carritos','usuarios','productos'));
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
        $carritos = new Carro;
        $carritos->id_usuario = $request->input('id_usuario');
        $carritos->id_producto = $request->input('id_producto');
        $carritos->cantidad = $request->input('cantidad');
        $carritos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carritos = Carro::find($id);
        $carritos->id_usuario = $request->input('id_usuario');
        $carritos->id_producto = $request->input('id_producto');
        $carritos->cantidad = $request->input('cantidad');
        $carritos->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carritos = Carro::find($id);
        $carritos->delete();
        return redirect()->back();
    }
}
