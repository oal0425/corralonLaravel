<!doctype html>
<html lang="es">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">


</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                        <img src="{{ asset('img/logo_transp.png') }}" 
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">INICIAR SESION</h4>
                      </div>
                      <h6>Ingresa tu correo y contraseña</h6>
                      <form action="{{route ('login')}}" method = 'POST'>
                        @csrf
</br>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Email</label>
                          <input type="email" id="form2Example11" name="email" class="form-control"
                            placeholder="Ingresa tu correo" />
                          
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                            <input type="password" id="form2Example22" name="password" class="form-control" />

                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar </button>
                          <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">No tienes cuenta? Registrate</p>
                          <a href="{{route('register')}}" class="btn btn-outline-success">Crea tu cuenta</a>
                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Más que un negocio</h4>
                      <p class="small mb-0">Ofrecemos excelente calidad de material para la construcción y buscamos seguir creciendo y brindar lo mejor a nuestros clientes</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
