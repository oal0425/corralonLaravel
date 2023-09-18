@extends('welcome')

@section ('content')

<div>
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        NUEVO
    </button>
</div>

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
            @foreach($detalles as $detalle)
            <tr class="">
                <td scope="row">{{$detalle->id}}</td>
                <td>{{$detalle->Producto->id}}</td>
                <td>{{$detalle->nombre}}</td>
                <td>{{$detalle->precio}}</td>
                <td>{{$detalle->cantidad}}</td>
                <td>{{$detalle->total}}</td>
                <td>
                    <a href="{{url('imprimir_detalle')}}" class="btn btn-outline-primary"> Imprimir </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>




@endsection
