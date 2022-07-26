@extends('layout.master')

@section('title', 'Form Edit Event')
@section('navEvent', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Event</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="/event/{{$event->id}}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor Event</label>
                                        <input type="text" value="{{$event->no_event}}" name="no" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Event</label>
                                        <input type="text" value="{{$event->nm_event}}" name="nama" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Client</label>
                                        <input type="text" value="{{$event->client}}" name="client" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mother EO</label>
                                        <input type="text" value="{{$event->mother_eo}}" name="mother" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Tanggal Mulai</label>
                                            <input type="date" value="{{$event->tgl_mulai}}" name="mulai" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Tanggal Akhir</label>
                                            <input type="date" value="{{$event->tgl_akhir}}" name="akhir" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Budget</label>
                                        <input type="number" value="{{$event->budget}}" name="budget" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
