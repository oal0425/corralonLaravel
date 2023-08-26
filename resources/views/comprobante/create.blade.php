  <!-- Modal CREATE -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGREGAR CLIENTE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('detalles.store')}}" method="POST">
            @csrf
            <div class="modal-body">

                <div class="mb-3">
                    <label for="" class="form-label">COMPROBANTE</label>
                    <select name='id_comprobante' id="" class="form-control">
                        @foreach($comprobantes as $comprobante)
                            <option value="{{$comprobante->id}}"> {{$comprobante->fecha}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">ID PRODUCTO</label>
                    <select name='id_producto' id="" class="form-control">
                        @foreach($productos as $producto)
                            <option value="{{$producto->id}}"> {{$producto->nombre}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">CANTIDAD</label>
                    <input type="text"
                class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="">
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
