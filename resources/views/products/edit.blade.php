@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Error de validación.<br><br>
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
                    <label for="" class="form-label">Nombre</label>
                    <input type="text"
                    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{$product->name}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Detalles</label>
                    <input type="text"
                    class="form-control" name="details" id="" aria-describedby="helpId" placeholder="" value="{{$product->details}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input type="text"
                    class="form-control" name="price" id="" aria-describedby="helpId" placeholder="" value="{{$product->price}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Descripcion</label>
                    <input type="text"
                    class="form-control" name="description" id="" aria-describedby="helpId" placeholder="" value="{{$product->description}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Stock Actual</label>
                    <input type="text"
                    class="form-control" name="stock_actual" id="" aria-describedby="helpId" placeholder="" value="{{$product->stock_actual}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Stock Mínimo</label>
                    <input type="text"
                    class="form-control" name="stock_minimo" id="" aria-describedby="helpId" placeholder="" value="{{$product->stock_minimo}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label"> Stock Reposición</label>
                    <input type="text"
                    class="form-control" name="stock_repo" id="" aria-describedby="helpId" placeholder="" value="{{$product->stock_repo}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Id Proveedor</label>
                    <select name='id_proveedor' id="" class="form-control">
                        @foreach($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}"> {{$proveedor->razon_social}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
    </form>


@endsection
