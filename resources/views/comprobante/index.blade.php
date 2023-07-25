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
                <th scope="col">TIPO</th>
                <th scope="col">FECHA</th>
                <th scope="col">ID CLIENTE</th>
                <th scope="col">ACCIONES</th>

            </tr>
        </thead>
        <tbody>
            @foreach($comprobantes as $comprobante)
            <tr class="">
                <td scope="row">{{$comprobantes->id}}</td>
                <td>{{$comprobantes->tipo}}</td>
                <td>{{$comprobantes->fecha}}</td>
                <td>{{$comprobantes->Cliente->id}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$comprobantes->id}}">
                        EDITAR
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$comprobantes->id}}">
                        ELIMINAR
                    </button>
                </td>
            </tr>
            @include('comprobante.info')
            @endforeach
        </tbody>
    </table>
</div>

@include('comprobante.create')


@endsection
