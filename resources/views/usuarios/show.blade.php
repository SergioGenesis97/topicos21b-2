@extends('layouts.index')

@section('title_page', 'Ver Usuario')
@section('title', 'Ver Usuario')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card  card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
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
                            <th> Edad </th>
                            <th> Pais </th>
                            <th> Codigo Postal </th>
                            <th> Direccion </th>
                            <th>    </th>
                            <th>    </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id_usuario}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->apellido_pat}}</td>
                            <td>{{$usuario->apellido_mat}}</td>
                            <td>{{$usuario->edad}}</td>
                            <td>{{$usuario->pais}}</td>
                            <td>{{$usuario->cod_postal}}</td>
                            <td>{{$usuario->direccion}}</td>
                            <td><a class="btn btn-warning" href="{{ route('usuarios.edit', $usuario->id_usuario) }}">Editar</a></td>
                            <td><form id="formulario-eliminar" action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
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
        $('#formulario-eliminar').submit(function(e){
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
                Swal.fire(

                this.submit()
                
                )
            }
            })
        });
    </script>
@endsection