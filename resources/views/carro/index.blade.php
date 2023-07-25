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
                <th scope="col">ID USUARIO</th>
                <th scope="col">ID PRODUCTO</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">ACCIONES</th>

            </tr>
        </thead>
        <tbody>
            @foreach($carritos as $carro)
            <tr class="">
                <td scope="row">{{$carrito->id}}</td>
                <td>{{$carrito->Usuario->id}}</td>
                <td>{{$carrito->Producto->id}}</td>
                <td>{{$carrito->cantidad}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$carrito->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$carrito->id}}">
                        ELIMINAR
                    </button>
                </td>
            </tr>
            @include('carro.info')
            @endforeach
        </tbody>
    </table>
</div>

@include('carro.create')


@endsection
