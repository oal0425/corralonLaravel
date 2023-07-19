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
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">DOMICILIO</th>
                <th scope="col">LOCALIDAD</th>
                <th scope="col">ID_USUARIO</th>

            </tr>
        </thead>

        <tbody>
            @foreach($clientes as $cliente)
            <tr class="">
                <td scope="row">{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->domicilio}}</td>
                <td>{{$cliente->localidad}}</td>
                <td>{{$cliente->Usuario->id}}</td>

                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->id}}">
                        ELIMINAR
                    </button>
                </td>
            </tr>
            @include('cliente.info')
            @endforeach
        </tbody>

    </table>
</div>

@include('cliente.create')


@endsection
