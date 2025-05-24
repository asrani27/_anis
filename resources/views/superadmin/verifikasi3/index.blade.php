@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Verifikasi Penerima</h3>

                <div class="card-tools">
                    <a href="/superadmin/verifikasi/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Penerima</th>
                            <th>Nama TKSK</th>
                            <th>Status Verifikasi</th>
                            <th>keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{$item->penerima}}</td>
                            <td>{{$item->tksk == null ? null :$item->tksk->nama}}</td>

                            <td>
                                @if ($item->status == null)
                                <span class="badge badge-warning">di proses</span>
                                @elseif($item->status == 'diterima')
                                <span class="badge badge-success">{{$item->status}}</span>
                                @else
                                <span class="badge badge-danger">{{$item->status}}</span>
                                @endif
                            </td>
                            <td>{{$item->keterangan}}</td>
                            <td class="text-right">

                                <a href="/superadmin/verifikasi/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/verifikasi/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin dihapus, data distribusi yang terkait akan ikut terhapus?');"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection