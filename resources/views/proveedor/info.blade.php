  <!-- Modal EDIT -->
  <div class="modal fade" id="edit{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('proveedores.update', $proveedor->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('put')}}
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Razón Social</label>
                    <input type="text"
                class="form-control" name="razon_social" id="" aria-describedby="helpId" placeholder="" value="{{$proveedor->razon_social}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">DOMICILIO</label>
                    <input type="text"
                class="form-control" name="domicilio_proveedor" id="" aria-describedby="helpId" placeholder="" value="{{$proveedor->domicilio_proveedor}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">TELEFONO</label>
                    <input type="text"
                class="form-control" name="telefono_proveedor" id="" aria-describedby="helpId" placeholder="" value="{{$proveedor->telefono_proveedor}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">LOCALIDAD</label>
                    <input type="text"
                class="form-control" name="localidad_proveedor" id="" aria-describedby="helpId" placeholder="" value="{{$proveedor->localidad_proveedor}}">
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
  <div class="modal fade" id="delete{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ELIMINAR PROVEEDOR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="modal-body">
                Estas seguro que quieres eliminar a <strong>{{$proveedor->razon_social}}</strong>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
