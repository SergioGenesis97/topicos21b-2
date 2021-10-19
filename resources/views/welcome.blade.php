@extends('layouts.index')

@section('title_page', 'Bienvenid@')
@section('title', 'Bienvenid@...')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="card bg-gradient-success">
            <div class="card-header">
                <h3 class="card-title">Default Card Example</h3>
                <div class="card-tools">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class="badge badge-primary">Label</span>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                The body of the card
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                The footer of the card
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection