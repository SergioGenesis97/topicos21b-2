@extends('layouts.index')

@section('title_page', 'Ver Proveedor')
@section('title', 'Ver Proveedor')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card  card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Proveedores</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th> id </th>
                            <th> RFC </th>
                            <th> Nombre </th>
                            <th> Apellido Paterno </th>
                            <th> Apellido Materno </th>
                            <th> Codigo Postal </th>
                            <th> Direccion </th>
                            <th> Telefono </th>
                            <th> Correo </th>
                            <th>    </th>
                            <th>    </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->id_proveedor}}</td>
                            <td>{{$proveedor->rfc}}</td>
                            <td>{{$proveedor->nombre}}</td>
                            <td>{{$proveedor->apell_pat}}</td>
                            <td>{{$proveedor->apell_mat}}</td>
                            <td>{{$proveedor->codigo_postal}}</td>
                            <td>{{$proveedor->direccion}}</td>
                            <td>{{$proveedor->telefono}}</td>
                            <td>{{$proveedor->correo}}</td>
                            <td>
                                <form class="formulario-actualizar" action="{{ route('proveedores.edit', $proveedor->id_proveedor) }}" method="GET">
                                    <button title="Editar" type="submit" class="material-icons btn btn-warning">mode</button>
                                </form>
                            </td>
                            <td><form class="formulario-eliminar" action="{{ route('proveedores.destroy', $proveedor) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button title="Eliminar" type="submit" class="material-icons btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

<!-- SWEET ALERT 2 -->
@section('js_sweet')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- sweet - Actualizar -->
    @if (session('actualizar') == 'ok')
        <script>
            Swal.fire(
                    '¡Actualizado!',
                    'El registro se actualizó con éxito.',
                    'success')
        </script>
    @endif

    <script>

        /* e => evento a capturar*/
        $('.formulario-actualizar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estás Seguro?',
            text: "Este registro se actualizará",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, actualizar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {

                this.submit()
                
            }
            })
        });
    </script>

    <!-- sweet - Eliminar -->
    @if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
                '¡Eliminado!',
                'El registro se eliminó con éxito.',
                'success')
    </script>
    @endif

    <script>

    /* e => evento a capturar*/
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

        Swal.fire({
        title: '¿Estás Seguro?',
        text: "Este registro se eliminará definitivamente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si, eliminar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {

            this.submit()
            
        }
        })
    });
    </script>

    
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