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
                <th scope="col">EMAIL</th>
            </tr>
        </thead>

        <tbody>
            @foreach($usuarios as $usuario)
            <tr class="">
                <td scope="row">{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$usuario->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$usuario->id}}">
                        ELIMINAR
                    </button>
                </td>
            </tr>
            @include('user.info')
            @endforeach
        </tbody>

    </table>
</div>

@include('user.create')


@endsection
