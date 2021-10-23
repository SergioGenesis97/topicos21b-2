@extends('layouts.index')

@section('title_page', 'Agregar Producto')
@section('title', 'Agregar Producto')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card  card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Formulario</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('productos.store') }}" method="POST">

                    @csrf

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="nombre" class="form-label">Marca</label>
                            <input type="text" name="marca" class="form-control" id="marca" aria-describedby="emailHelp" placeholder="Marca..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_pat" class="form-label">Tipo</label>
                            <input type="text" name="tipo" class="form-control" id="tipo" aria-describedby="emailHelp" placeholder="Tipo..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_mat" class="form-label">Precio</label>
                            <input type="number" name="precio" class="form-control" id="precio" aria-describedby="emailHelp" placeholder="Precio..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="edad" class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" id="stock" aria-describedby="emailHelp" placeholder="Existencias..." required>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-1">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="card-footer">
                                <button type="reset" class="btn btn-danger">Borrar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.form-->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection