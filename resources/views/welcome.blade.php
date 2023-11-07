<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Corralon Cortez</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">




          <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


      </head>


    <body >
        

            <header>

                <!--
                    "navbar navbar-expand-md navbar-light bg-white shadow-sm"
                NAVBAR, DONDE SALEN LOS LINK QUE NOS LLEVAN A LAS DIFERENTES SECCIONES
                -->
              <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                  <ul class="nav navbar-nav">
                      
                      <a class="navbar-brand" href="{{ url('/') }}">
                    CORRALON CORTEZ
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>



                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('productos')}}">PRODUCTOS</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('detalles')}}#">DETALLES</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url ('comprobantes')}}">COMPROBANTES</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{url ('shop')}}">VENDER</a>
                    </li>

                  </ul>



                  <div>
                    <a href="{{route('login')}}" class="btn btn-outline-primary">Login</a>
                    <a href="{{ url('/roles') }}" class="btn btn-outline-primary">Roles</a>
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
