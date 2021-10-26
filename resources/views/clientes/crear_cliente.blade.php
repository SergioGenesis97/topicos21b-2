@extends('layouts.index')

@section('title_page', 'Agregar Cliente')
@section('title', 'Agregar Cliente')

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
                <form action="{{ route('clientes.store') }}" method="POST">

                    @csrf

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_pat" class="form-label">Apellido Paterno</label>
                            <input type="text" name="apell_pat" class="form-control" id="apellido_pat" aria-describedby="emailHelp" placeholder="Apellido Paterno..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_mat" class="form-label">Apellido Materno</label>
                            <input type="text" name="apell_mat" class="form-control" id="apellido_mat" aria-describedby="emailHelp" placeholder="Apellido Materno..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="cod_postal" class="form-label">Código Postal</label>
                            <input type="number" name="codigo_postal" class="form-control" id="cod_postal" aria-describedby="emailHelp" placeholder="Codigo Postal..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" name="telefono" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="telefono..." required>
                        </div>
                        <div class="col-md-12">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" name="direccion" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Direccion..." required>
                        </div>
                        <div class="col-md-12">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" name="correo" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Correo..." required>
                        </div>
                    </div>
                    <div id="direccion" class="form-text">No compartiremos tu información con nadie.</div>
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

@section('js_sweet')
    <!-- sweet - **** CERRAR SESIÓN **** -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        /* e => evento a capturar*/
        $('.formulario-logout').submit(function(e){
            e.preventDefault();
    
            Swal.fire({
            title: '¿Cerrar Sesión?',
            text: "¡Está a punto de cerrar su sesión!",
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, Cerrar Sesión!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
    
                this.submit()
                
            }
            })
        });
        </script>
    
@endsection