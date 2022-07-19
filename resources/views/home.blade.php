@extends('layout.master')

@section('content')
    <div class="wrapper">
        @auth
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <h4>{{ session('status') }}</h4>
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
            @else
                <div class="container text-center bg-white mt-3 p-4">
                    <h1>Login Dulu Untuk Menggunakan Aplikasi Ini</h1>
                </div>
            @endauth
        </div>
    </div>
@endsection
