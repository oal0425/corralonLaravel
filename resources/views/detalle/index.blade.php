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
                <td scope="row">{{$detalles->id}}</td>
                <td>{{$detalles->Comprobante->id}}</td>
                <td>{{$detalles->Producto->id}}</td>
                <td>{{$detalles->cantidad}}</td>

                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$detalles->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$detalles->id}}">
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
