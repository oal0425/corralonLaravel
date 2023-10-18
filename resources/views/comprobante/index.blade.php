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
                <th scope="col">ID Detalle</th>
                <th scope="col">TOTAL</th>
                <th scope="col">FECHA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comprobantes as $comprobante)
            <tr class="">
                <td scope="row">{{$comprobante->id}}</td>
                <td>{{$comprobante->id_detalle}}</td>
                <td>{{$comprobante->total}}</td>
                <td>{{$comprobante->fecha}}</td>
                <td>
                    <a href="{{url('imprimir_comprobante')}}" class="btn btn-outline-primary"> Imprimir </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>




@endsection
