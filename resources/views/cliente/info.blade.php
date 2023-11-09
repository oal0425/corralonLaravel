  <!-- Modal EDIT -->
  <div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('clientes.update', $cliente->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('put')}}
            <div class="modal-body">

                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text"
                    class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->nombre}}" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text"
                    class="form-control" name="apellido" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->nombre}}" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Teléfono</label>
                    <input type="text"
                class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->telefono}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Domicilio</label>
                    <input type="text"
                class="form-control" name="domicilio" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->domicilio}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Localidad</label>
                    <input type="text"
                class="form-control" name="localidad" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->localidad}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <select name='idusuario' id="" class="form-control">
                        @foreach($usuarios as $usuario)
                            <option value="{{$usuario->id}}"> {{$usuario->name}} </option>
                        @endforeach
                    </select>
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
  <div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ELIMINAR CLIENTE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="modal-body">
                Estas seguro que quieres eliminar a <strong>{{$cliente->nombre}}</strong>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
