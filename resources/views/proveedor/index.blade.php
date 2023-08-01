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
                <th scope="col">CUIT</th>
                <th scope="col">RAZON SOCIAL</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">LOCALIDAD</th>
                <th scope="col">ACCIONES</th>

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
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$proveedor->id}}">
                        ELIMINAR
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
