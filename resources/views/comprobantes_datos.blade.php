
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
                <td scope="row">{{$comprobante->id}}</td>
                <td>{{$comprobante->id_detalle}}</td>
                <td>{{$comprobante->total}}</td>
                <td>{{$comprobante->fecha}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
