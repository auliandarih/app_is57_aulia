@extends('layout.master')

@section('title', 'Data Pengajuan')
@section('navAju', 'active')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pengajuan</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pengajuan</h3>

                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="" style="float: right">
                                <a href="/pengajuan/form" class="btn btn-sm btn-primary">Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-nowrap table-sm text-center ">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Event</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>QTY</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                                <tbody>
                                    @forelse ($pengajuan as $item)
                                        <tr>
                                            <th scope="row">{{ $nomor++ }}</th>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->events->nm_event }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ rupiah($item->harga) }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ rupiah($item->jumlah) }}</td>
                                            <td>
                                                <a href="/pengajuan/edit/{{ $item->id }}"
                                                    class="btn btn-success btn-sm">Edit</a>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modal-default{{ $item->id }}">
                                                    hapus
                                                </button>

                                                {{-- Modal Hapus --}}
                                                <div class="modal fade" id="modal-default{{ $item->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Peringatan</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Yakin Pengajuan Tanggal <b>{{ $item->tanggal }}</b> ingin
                                                                dihapus?
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Batal</button>
                                                                <form method="POST" action="/pengajuan/{{ $item->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8">No Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    @endsection
