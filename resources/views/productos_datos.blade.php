
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
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->marca}}</td>
                <td>{{$producto->fecha_vencimiento}}</td>
                <td>{{$producto->fecha_elaboracion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock_actual}}</td>
                <td>{{$producto->stock_minimo}}</td>
                <td>{{$producto->stock_repo}}</td>
                <td>{{$producto->Proveedor->razon_social}}</td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>

