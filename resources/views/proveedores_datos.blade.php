
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
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
