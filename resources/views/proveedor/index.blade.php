@extends('layouts.app')

@section ('content')
<h5>Proveedores</h5>

<div>
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        Nuevo Proveedor
    </button>

    <a href="{{url('imprimir_proveedor')}}" class="btn btn-outline-primary" > Imprimir </a>
</div>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Cuit</th>
                <th scope="col">Razon Social</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Localidad</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr class="">
                <td scope="row">{{$proveedor->id}}</td>
                <td>{{$proveedor->razon_social}}</td>
                <td>{{$proveedor->domicilio_proveedor}}</td>
                <td>{{$proveedor->telefono_proveedor}}</td>
                <td>{{$proveedor->localidad_proveedor}}</td>

                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$proveedor->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$proveedor->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('proveedor.info')
            @endforeach
        </tbody>
    </table>
</div>

@include('proveedor.create')


@endsection

