
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

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
