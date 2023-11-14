@extends('layouts.app')
@section ('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Clientes</h2>
        </div>
      
    </div>
</div>

<div>
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        Nuevo Cliente
    </button>

    <a href="{{url('imprimir_cliente')}}" class="btn btn-outline-primary"> Imprimir </a>

    <a href="{{url('generar_xml_cliente')}}" class="btn btn-outline-primary"> Generar XML </a>
</div>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Localidad</th>
                <th scope="col">Id_Usuario</th>

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
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->id}}">
                        Eliminar
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
