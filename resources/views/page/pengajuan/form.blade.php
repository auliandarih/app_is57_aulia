@extends('layout.master')

@section('title', 'Form Tambah Pengajuan')
@section('navAju', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Tambah Pengajuan</h1>
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
                            <form method="post" action="/pengajuan/store" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal</label>
                                        <input type="date" name="tgl" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Event</label>
                                        <select name="event" class="form-control">
                                            <option value="">-Pilih Event-</option>
                                            @foreach ($event as $item)
                                                <option value="{{ $item->id }}">{{ $item->nm_event }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Deskripsi</label>
                                        <input type="text" name="desk" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="exampleInputPassword1">Harga</label>
                                            <input type="number" name="harga" class="form-control"
                                                id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="exampleInputPassword1">QTY</label>
                                            <input type="number" name="qty" class="form-control"
                                                id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="exampleInputPassword1">Jumlah</label>
                                            <input type="number" name="jumlah" class="form-control"
                                                id="exampleInputPassword1">
                                        </div>
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
