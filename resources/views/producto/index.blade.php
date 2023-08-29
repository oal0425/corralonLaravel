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
                <th scope="col">MARCA</th>
                <th scope="col">FECHA VENCIMIENTO</th>
                <th scope="col">FECHA ELABORACION</th>
                <th scope="col">PRECIO</th>
                <th scope="col">STOCK ACTUAL</th>
                <th scope="col">STOCK MINIMO</th>
                <th scope="col">STOCK REPOSICION</th>
                <th scope="col">PROVEEDOR</th>
                <th scope="col">ACCIONES</th>

            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr class="">
                <td scope="row">{{$producto->id}}</td>
                <td>{{$producto->name}}</td>
                <td>{{$producto->details}}</td>
                <td>{{$producto->price}}</td>
                <td>{{$producto->description}}</td>

                <td>{{$producto->stock_actual}}</td>
                <td>{{$producto->stock_minimo}}</td>
                <td>{{$producto->stock_repo}}</td>
                <td>{{$producto->Proveedor->razon_social}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                        ELIMINAR
                    </button>
                    <a href="{{url('imprimir_producto')}}" class="btn btn-outline-primary"> Imprimir </a>
                </td>
            </tr>
            @include('producto.info')
            @endforeach
        </tbody>
    </table>
</div>

@include('producto.create')


@endsection

