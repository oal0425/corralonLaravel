  <!-- Modal CREATE -->
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
                    <label for="" class="form-label">Detalles</label>
                    <input type="text"
                    class="form-control" name="detalles" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> PRECIO</label>
                    <input type="text"
                    class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> Descripcion</label>
                    <input type="text"
                    class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> STOCK ACTUAL</label>
                    <input type="text"
                    class="form-control" name="stock_actual" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> STOCK MINIMO</label>
                    <input type="text"
                    class="form-control" name="stock_minimo" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> STOCK REPOSICION</label>
                    <input type="text"
                    class="form-control" name="stock_repo" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">ID PROVEEDOR</label>
                    <select name='id_proveedor' id="" class="form-control">
                        @foreach($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}"> {{$proveedor->razon_social}} </option>
                        @endforeach
                    </select>
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

