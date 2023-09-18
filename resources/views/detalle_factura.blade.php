<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles Factura</title>
</head>
<body>
    <div class="table-responsive">
        <br>
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID_PRODUCTO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">ID_USUARIO</th>
                    <th scope="col">FECHA</th>

                </tr>
            </thead>
            <tbody>
                @foreach($detalles as $detalle)
                <tr class="">
                    <td scope="row">{{$detalle->id}}</td>
                    <td>{{$detalle->id_producto}}</td>
                    <td>{{$detalle->nombre}}</td>
                    <td>{{$detalle->precio}}</td>
                    <td>{{$detalle->cantidad}}</td>
                    <td>{{$detalle->total}}</td>
                    <td>{{$detalle->id_usuario}}</td>
                    <td>{{$detalle->fecha}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
