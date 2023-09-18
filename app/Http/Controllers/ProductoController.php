<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('producto.index', compact('productos', 'proveedores'));
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
        $productos = new Producto;
        $productos->name = $request->input('nombre');
        //$productos->slug = $request->input('slug');
        $productos->details = $request->input('detalles');
        $productos->price = $request->input('precio');
        //$productos->shipping_cost = $request->input('shipping_cost');
        $productos->description = $request->input('descripcion');
        //$productos->category_id = $request->input('category');
        $productos->stock_actual = $request->input('stock_actual');
        $productos->stock_minimo = $request->input('stock_minimo');
        $productos->stock_repo = $request->input('stock_repo');
        //$productos->brand_id = $request->input('brand_id');
        $productos->id_proveedor = $request->input('id_proveedor');
        $productos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos = Producto::find($id);
        $productos->name = $request->input('nombre');
        //$productos->slug = $request->input('slug');
        $productos->details = $request->input('detalles');
        $productos->price = $request->input('precio');
        //$productos->shipping_cost = $request->input('shipping_cost');
        $productos->description = $request->input('descripcion');
        //$productos->category_id = $request->input('category');
        $productos->stock_actual = $request->input('stock_actual');
        $productos->stock_minimo = $request->input('stock_minimo');
        $productos->stock_repo = $request->input('stock_repo');
        //$productos->brand_id = $request->input('brand_id');
        $productos->id_proveedor = $request->input('id_proveedor');
        $productos->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos = Producto::find($id);
        $productos->delete();
        return redirect()->back();
    }

    
}
