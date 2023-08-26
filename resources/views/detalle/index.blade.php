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
                <th scope="col">ID COMPROBANTE</th>
                <th scope="col">ID PRODUCTO</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">ACCIONES</th>

            </tr>
        </thead>
        <tbody>
            @foreach($detalles as $detalle)
            <tr class="">
                <td scope="row">{{$detalle->id}}</td>
                <td>{{$detalle->Comprobante->id}}</td>
                <td>{{$detalle->Producto->id}}</td>
                <td>{{$detalle->cantidad}}</td>

                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$detalle->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$detalle->id}}">
                        ELIMINAR
                    </button>
                </td>
            </tr>
            @include('detalle.info')
            @endforeach
        </tbody>
    </table>
</div>

@include('detalle.create')


@endsection
