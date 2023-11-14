@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Nuevo Producto</h2>
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

    <form action="{{ route('products.store') }}" method="POST">
    	@csrf
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nombre:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Nombre">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detalles:</strong>
		            <textarea class="form-control" style="height:150px" name="details" placeholder="Detalles"></textarea>
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Precio</strong>
		            <input type="text" name="price" class="form-control" placeholder="Precio">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Descripción</strong>
		            <input type="text" name="description" class="form-control" placeholder="Descripción">
		        </div>
		    </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Stock Actual</strong>
		            <input type="text" name="stock_actual" class="form-control" placeholder="Stock Actual">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Stock Mínimo</strong>
		            <input type="text" name="stock_minimo" class="form-control" placeholder="Stock Mínimo">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Stock Reposición</strong>
		            <input type="text" name="stock_repo" class="form-control" placeholder="Stock Reposición">
		        </div>
		    </div>

            <div class="mb-3">
                <label for="" class="form-label">Id Proveedor</label>
                <select name='id_proveedor' id="" class="form-control">
                    @foreach($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}"> {{$proveedor->razon_social}} </option>
                    @endforeach
                </select>
            </div>



		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Agregar</button>
		    </div>
		</div>
    </form>


@endsection
