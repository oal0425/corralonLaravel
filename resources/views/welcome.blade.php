<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

      </head>


    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <header>



                <!--
                NAVBAR, DONDE SALEN LOS LINK QUE NOS LLEVAN A LAS DIFERENTES SECCIONES
                -->
              <nav class="navbar navbar-expand navbar-dark bg-dark">
                  <ul class="nav navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link active" href="{{'/'}}" aria-current="page">COMERCIO <span class="visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url ('usuarios')}}">USUARIOS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url ('clientes')}}">CLIENTES</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('proveedores')}}">PROVEEDORES</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('productos')}}">PRODUCTOS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url ('carros')}}">CARROS</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('detalles')}}#">DETALLES</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('comprobantes')}}">COMPROBANTES</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{url ('shop')}}">Comprar</a>
                    </li>

                  </ul>

                  <div>
                    <a href="{{route('login')}}" class="btn btn-outline-primary">LOGIN</a>
                    <a href="{{route('register')}}" class="btn btn-outline-warning">Registrar</a>

                </div>

              </nav>


              </header>

              <main class="conteiner">
                <div class="row">
                    <div class="col-md-2 "></div>

                    <div class="col-md-8"></div>
                    <br><br>

                    @yield('content') <!-- SE LLAMA A LA SECCION CONTENT DONDE SE ENCUENTRAN LAS TABLAS  -->


                    <div class="col-md-2"></div>
                </div>



            </main>

        </div>

        <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>
</html>
