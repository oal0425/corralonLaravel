  <!-- Modal CREATE -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGREGAR CLIENTE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('proveedores.store')}}" method="POST">
            @csrf
            <div class="modal-body">

                <div class="mb-3">
                    <label for="" class="form-label">CUIT</label>
                    <input type="text"
                class="form-control" name="cuit_proveedor" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">RAZON SOCIAL</label>
                    <input type="text"
                class="form-control" name="razon_social" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">DOMICILIO</label>
                    <input type="text"
                class="form-control" name="domicilio_proveedor" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">TELEFONO</label>
                    <input type="text"
                class="form-control" name="telefono_proveedor" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">LOCALIDAD</label>
                    <input type="text"
                class="form-control" name="localidad_proveedor" id="" aria-describedby="helpId" placeholder="">
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
 
 
 
 
 
 
  
