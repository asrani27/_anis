@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Distribusi Bantuan</h3>

                <div class="card-tools">
                    <a href="/superadmin/distribusi/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Penerima</th>
                            <th>Nama Petugas</th>
                            <th>Pangan Yg Diterima</th>
                            <th>keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                            <td>{{$item->penerima == null ? '-' : $item->penerima->penerima}}</td>
                            <td>{{$item->petugas == null ? '-' : $item->petugas->nama}}</td>
                            <td>{{$item->pangan == null ? '-' : $item->pangan->nama}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td class="text-right">

                                <a href="/superadmin/distribusi/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/distribusi/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
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