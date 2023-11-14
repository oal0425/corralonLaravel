<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID DETALLE</th>
                <th scope="col">TOTAL</th>
                <th scope="col">FECHA</th>


            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">{{$comprobante->id}}</td>
                <td>{{$comprobante->id_detalle}}</td>
                <td>{{$comprobante->total}}</td>
                <td>{{$comprobante->fecha}}</td>
            </tr>
        </tbody>
    </table>
</div>
