  <!-- Modal EDIT -->
  <div class="modal fade" id="edit{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('usuarios.update', $usuario->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('put')}}
            <div class="modal-body">

                <div class="mb-3">
                    <label for="" class="form-label">NOMBRE</label>
                    <input type="text"
                    class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$usuario->nombre}}" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">EMAIL</label>
                    <input type="email"
                    class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{$usuario->email}}" >
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
      </div>
    </div>
  </div>



  <!-- Modal DELETE -->
  <div class="modal fade" id="delete{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ELIMINAR USUARIO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="modal-body">
                Estas seguro que quieres eliminar a <strong>{{$usuario->nombre}}</strong>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
