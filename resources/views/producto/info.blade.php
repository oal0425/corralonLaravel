  <!-- Modal EDIT -->
  <div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR PRODUCTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.update', $producto->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('put')}}
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">NOMBRE</label>
                    <input type="text"
                    class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$producto->nombre}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">MARCA</label>
                    <input type="text"
                    class="form-control" name="marca" id="" aria-describedby="helpId" placeholder="" value="{{$producto->marca}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">FECHA VENCIMIENTO</label>
                    <input type="text"
                    class="form-control" name="fecha_vencimiento" id="" aria-describedby="helpId" placeholder="" value="{{$producto->fecha_vencimiento}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> FECHA ELABORACION</label>
                    <input type="text"
                    class="form-control" name="fecha_elaboracion" id="" aria-describedby="helpId" placeholder="" value="{{$producto->fecha_elaboracion}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> PRECIO</label>
                    <input type="text"
                    class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" value="{{$producto->precio}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> STOCK ACTUAL</label>
                    <input type="text"
                    class="form-control" name="stock_actual" id="" aria-describedby="helpId" placeholder="" value="{{$producto->stock_actual}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> STOCK MINIMO</label>
                    <input type="text"
                    class="form-control" name="stock_minimo" id="" aria-describedby="helpId" placeholder="" value="{{$producto->stock_minimo}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> STOCK REPOSICION</label>
                    <input type="text"
                    class="form-control" name="stock_repo" id="" aria-describedby="helpId" placeholder="" value="{{$producto->stock_repo}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">ID PROVEEDOR</label>
                    <select name='id_proveedor' id="" class="form-control" >
                        @foreach($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}"> {{$proveedor->razon_social}} </option>
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
  <div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ELIMINAR PRODUCTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="modal-body">
                Estas seguro que quieres eliminar a <strong>{{$producto->nombre}}</strong>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
      </div>
    </div>  <!-- Modal CREATE -->
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">AGREGAR PRODUCTO</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{route('productos.store')}}" method="POST">
              @csrf
              <div class="modal-body">
              <div class="mb-3">
                  <label for="" class="form-label">NOMBRE</label>
                  <input type="text"
                  class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label">DESCRIPCION</label>
                  <input type="text"
                  class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label">CODIGO BARRAS</label>
                  <input type="text"
                  class="form-control" name="codigobarras" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label"> PRECIO COSTO</label>
                  <input type="text"
                  class="form-control" name="preciocosto" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label"> PRECIO VENTA</label>
                  <input type="text"
                  class="form-control" name="precioventa" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label"> STOCK PRODUCTO</label>
                  <input type="text"
                  class="form-control" name="stockproducto" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label"> STOCK MINIMO</label>
                  <input type="text"
                  class="form-control" name="stockminimo" id="" aria-describedby="helpId" placeholder="">
              </div>

              <div class="mb-3">
                  <label for="" class="form-label">Estado</label>
                  <input type="text"
                  class="form-control" name="estado" id="" aria-describedby="helpId" placeholder="">
              </div>


              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
          </form>
        </div>
      </div>
    </div>

  </div>
