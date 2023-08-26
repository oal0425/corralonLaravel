<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="table-responsive">
        <br>
        <h1>DATOS CLIENTES </h1>
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">DOMICILIO</th>
                    <th scope="col">LOCALIDAD</th>
                    <th scope="col">ID_USUARIO</th>

                </tr>
            </thead>

            <tbody>
                @foreach($clientes as $cliente)
                <tr class="">
                    <td scope="row">{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->domicilio}}</td>
                    <td>{{$cliente->localidad}}</td>
                    <td>{{$cliente->Usuario->id}}</td>

                </tr>

                @endforeach
            </tbody>

        </table>
    </div>



</body>

</html>
