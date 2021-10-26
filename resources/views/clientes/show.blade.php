@extends('layouts.index')

@section('title_page', 'Ver Cliente')
@section('title', 'Ver Cliente')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card  card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Clientes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th> id </th>
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
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id_cliente}}</td>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apell_pat}}</td>
                            <td>{{$cliente->apell_mat}}</td>
                            <td>{{$cliente->codigo_postal}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->correo}}</td>
                            <td>
                                <form class="formulario-actualizar" action="{{ route('clientes.edit', $cliente->id_cliente) }}" method="GET">
                                    <button title="Editar" type="submit" class="material-icons btn btn-warning">mode</button>
                                </form>
                            </td>
                            <td><form class="formulario-eliminar" action="{{ route('clientes.destroy', $cliente) }}" method="POST">
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