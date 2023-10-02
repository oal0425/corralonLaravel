@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>A;ADIR NUEVO PRODUCTO</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo algunos problemas con tu ingreso.<br><br>
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
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detalles:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Precio</strong>
		            <input type="text" name="price" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Descripcion</strong>
		            <input type="text" name="description" class="form-control" placeholder="Name">
		        </div>
		    </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Stock Actual</strong>
		            <input type="text" name="stock_actual" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Stock Minimo</strong>
		            <input type="text" name="stock_minimo" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Stock Reposicion</strong>
		            <input type="text" name="stock_repo" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="mb-3">
                <label for="" class="form-label">ID PROVEEDOR</label>
                <select name='id_proveedor' id="" class="form-control">
                    @foreach($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}"> {{$proveedor->razon_social}} </option>
                    @endforeach
                </select>
            </div>



		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>


@endsection
