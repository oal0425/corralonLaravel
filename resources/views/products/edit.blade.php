@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')
         <div class="row">
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
		</div>
    </form>

<p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
@endsection
