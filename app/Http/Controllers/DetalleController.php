<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Product;
use App\Models\Cliente;
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
        $productos = Product::all();
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
        /*
        $carro = $request->input('carro_lleno');
        $detalles = new Detalle;
        $detalles->id_producto = $carro->id;
        $detalles->nombre = $carro->name;
        $detalles->precio = $carro->price;
        $detalles->cantidad = $carro->quantity;
        $detalles->total = \Cart::getTotal();
        $detalles->save();
        return redirect()->back();
        */
    }

    public function generar_detalle(Request $request)
    {
        $carro = \Cart::getContent();
        //$detalles = new Detalle;
        foreach ($carro as $item)
        {
            $detalles = new Detalle;
            $detalles->id_producto = $item->id;
            $detalles->nombre = $item->name;
            $detalles->precio = $item->price;
            $detalles->cantidad = $item->quantity;
            $detalles->total = $item->price * $item->quantity;
            $detalles->id_usuario = auth()->id();
            $detalles->fecha = now();
            $detalles->save();

        }
        $detalles->total_venta = \Cart::getTotal();
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

    public function buscar_cliente($id)
    {
        return Cliente::find($id);

    }
}
