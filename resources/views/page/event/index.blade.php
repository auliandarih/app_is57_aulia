@extends('layout.master')

@section('title', 'Data Event')
@section('navEvent', 'active')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Event</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">


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
                                @can('create', App\Event::class)
                                    <a href="/event/form" class="btn btn-sm btn-primary">Tambah Data</a>
                                @endcan
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-nowrap table-sm text-center">
                                <tr>
                                <tr>
                                    <th style="vertical-align: middle" rowspan="2">No</th>
                                    <th style="vertical-align: middle" rowspan="2">Nomor Event</th>
                                    <th style="vertical-align: middle" rowspan="2">Nama Event</th>
                                    <th style="vertical-align: middle" rowspan="2">Client</th>
                                    <th style="vertical-align: middle" rowspan="2">Mother EO</th>
                                    <th colspan="2">Tanggal</th>
                                    <th style="vertical-align: middle" rowspan="2">Budget</th>

                                    @can('create', App\Event::class)
                                        <th style="vertical-align: middle" rowspan="2">Action</th>
                                    @endcan
                                </tr>
                                </tr>
                                <tr>
                                    <th>Mulai</th>
                                    <th>Akhir</th>
                                </tr>
                                <tbody>
                                    @forelse ($event as $item)
                                        <tr>
                                            <th scope="row">{{ $nomor++ }}</th>
                                            <td>{{ $item->no_event }}</td>
                                            <td>{{ $item->nm_event }}</td>
                                            <td>{{ $item->client }}</td>
                                            <td>{{ $item->mother_eo }}</td>
                                            <td>{{ $item->tgl_mulai }}</td>
                                            <td>{{ $item->tgl_akhir }}</td>
                                            <td>{{ rupiah($item->budget) }}</td>
                                            @can('create', App\Event::class)
                                                <td>
                                                    <a href="/event/edit/{{ $item->id }}"
                                                        class="btn btn-success btn-sm">edit</a>


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
                                                                    Yakin data Event <b>{{ $item->nm_event }}</b> ingin
                                                                    dihapus?
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                    <form method="POST" action="/event/{{ $item->id }}">
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
                                            @endcan
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">No Data</td>
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
    </div>
@endsection
