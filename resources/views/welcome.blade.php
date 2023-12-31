<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Corralon Cortez</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">




          <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


      </head>

    <body >
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <ul class="nav navbar-nav">
        
        <a class="navbar-brand" href="{{ url('/') }}" >
            HOME
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
<main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                                @yield('content')
                            </div>
                        
                </div>
            </div>
        </main>
        
           

<div class="text-center">
<h1>BIENVENIDOS A CORRALON CORTEZ</h1>
</div>
</br>
</br>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="text-center">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/corr1.jpg') }}" style="width: 800px;"  alt="...">                 
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/corr2.png') }}" style="width: 800px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/corr3.jpg') }}" style="width: 800px;"alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/corr4.jpg') }}" style="width: 800px;"alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</br>
</br>
<div class="text-center">
<h2>Sobre Nosotros</h2>
</div>
<div class="container p-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-justify">
                Disensa es una sólida empresa Ecuatoriana, líder en el mercado de distribución de ventas de materiales para la construcción desde 1973. Contamos con la experiencia en el desarrollo de soluciones para el mercado de la construcción, 
                siempre ofreciendo los productos de calidad garantizada y el mejor servicio.
                Disensa posee el primer sistema de franquicia de materiales de construcción a nivel mundial.
                En 1973 Disensa es una tienda independiente de materiales y herramientas para construcción y ferreterías en Ecuador. 
                1978 Disensa comienza en Ecuador como un distribuidor independiente, y a medida que pasaron los años creciendo hasta convertirse
                en una red de franquicias también en varios paises de latinoamérica
                y en 2021 el Corralón Cortez es fundado como una franquicia de Disensa
            
            </p>
        </div>
    </div>
</div>
<div class="text-center">
<h2>Misión</h2>
</div>
    <div class="row justify-content-center p-5 text-center">
        <div class="col-md-8">
            <p class="text-justify">
            El corralón Cortez comparte la misión de Disensa de proveer soluciones para las necesidades de la construcción y/o mejoramiento del hogar, a través de un servicio confiable, oferta completa de productos y una experiencia de compra diferenciada.
            
            </p>
        </div>
    </div>
<div class="text-center">
<h2>Visión</h2>
</div>
    <div class="row justify-content-center p-5 text-center">
        <div class="col-md-8">
            <p class="text-justify">
            Ser la red de tiendas de materiales de construcción y mejoramiento del hogar, con mayor presencia en Latinoamérica.
            </p>
        </div>
    </div>
<div class="text-center">
<h2>Objetivos</h2>
</div>
    <div class="row justify-content-center p-5 text-center">
        <div class="col-md-8">
            <p class="text-justify">
          	Siempre priorizar a salud y seguridad ocupacional de la gente. </br>
          	Asumir la seguridad e integridad de nuestros trabajadores como lo más importante,</br> sin comprometer nada que tenga relación con este tema.</br>
          	Proveer productos de construcción que cumplan con las políticas de seguridad de uso.</br>
          	Respetar la dignidad, privacidad y derechos personales de cada una de las personas.</br>
          	Trabajar en pro de la conservación de los recursos naturales y la reducción de residuos peligrosos.</br>
          	Competir por nuestros clientes sobre la base de valor y la calidad de nuestros productos, servicios y ofertas.</br>

          </p>
        </div>
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

</div>
    </body>
</html>
