<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
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
        $proveedores = new Proveedor;
        $proveedores->id = $request->input('cuit_proveedor');
        $proveedores->razon_social = $request->input ('razon_social');
        $proveedores->domicilio_proveedor = $request->input('domicilio_proveedor');
        $proveedores->telefono_proveedor = $request->input('telefono_proveedor');
        $proveedores->localidad_proveedor = $request->input ('localidad_proveedor');
        $proveedores->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proveedor $proveedor)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cuit)
    {
        $proveedores = Proveedor::find($cuit);
        $proveedores->razon_social = $request->input ('razon_social');
        $proveedores->domicilio_proveedor = $request->input('domicilio_proveedor');
        $proveedores->telefono_proveedor = $request->input('telefono_proveedor');
        $proveedores->localidad_proveedor = $request->input ('localidad_proveedor');
        $proveedores->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedores = Proveedor::find($id);
        $proveedores->delete();
        return redirect()->back();
    }
}
