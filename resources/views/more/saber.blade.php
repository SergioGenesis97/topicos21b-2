@extends('layouts.index')

@section('title_page', 'Saber Más')
@section('title', 'Saber más')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card card-outline card-dark">
            <div class="card-header">
                <h3 class="card-title"> </h3>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="text-align: justify">
                Proyecto realizado para la materia de Topicos Selectos de TI II
                en conjunto con el Mtro. Miguel Ángel Ramírez Torres.
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                8° Semestre.
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('js_sweet')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- sweet - **** CERRAR SESIÓN **** -->
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