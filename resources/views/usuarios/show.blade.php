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
                            <td><a href="{{ route('usuarios.edit', $usuario->id_usuario) }}">Editar</a></td>
                            <td><form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Eliminar</button>
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