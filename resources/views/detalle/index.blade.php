@extends('layouts.initial')
@section ('content')

<h5>Detalles</h5>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID PRODUCTO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRECIO</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">TOTAL</th>
            </tr>
        </thead>
<tbody>
    @foreach($detalles1 as $detalle)
    <tr>
        <td scope="row">{{ $detalle->id }}</td>
        @foreach ($detalle->productos as $producto)
            <td>{{ $producto->id_producto }}</td>
            <td>{{ $producto->name }}</td>
            <td>{{ $producto->price }}</td>
            <td>{{ $producto->quantity }}</td>
            <td>{{ $producto->total }}</td>
        @endforeach
        <td>
            <a href="{{ url('imprimir_detalle') }}" class="btn btn-outline-primary">Imprimir</a>
        </td>
    </tr>
    @endforeach
</tbody>
    </table>
</div>




@endsection
