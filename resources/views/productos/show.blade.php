@extends('layouts.index')

@section('title_page', 'Ver Productos')
@section('title', 'Ver Productos')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card  card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Productos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th> id </th>
                            <th> Marca </th>
                            <th> Tipo </th>
                            <th> Precio </th>
                            <th> Stock </th>
                            <th>    </th>
                            <th>    </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id_producto}}</td>
                            <td>{{$producto->marca}}</td>
                            <td>{{$producto->tipo}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->stock}}</td>
                            <td>
                                <form id="formulario-actualizar" action="{{ route('productos.edit', $producto->id_producto) }}" method="GET">
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                </form>
                            </td>
                            <td><form id="formulario-eliminar" action="{{ route('productos.destroy', $producto) }}" method="POST">
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
        $('#formulario-actualizar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estás Seguro?',
            text: "Este registro se actualizará",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, actualizar!',
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