@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pengajuan Hibah/Bansos</h3>

                <div class="card-tools">
                    <a href="/superadmin/penerima/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Nama</th>
                            <th>Tgl Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Jkel</th>
                            <th>Agama</th>
                            <th>Kab/Kota</th>
                            <th>Telp</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>DiInput Oleh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{$item->jenis}}</td>
                            <td>{{$item->penerima}}</td>
                            <td>{{$item->tanggal_lahir}}</td>
                            <td>{{$item->tempat_lahir}}</td>
                            <td>{{$item->jkel}}</td>
                            <td>{{$item->agama}}</td>
                            <td>{{$item->kabupaten}}</td>
                            <td>{{$item->telp}}</td>
                            <td>{{$item->alamat}}</td>

                            <td>
                                @if ($item->status == null)
                                <span class="badge badge-warning">di proses</span>
                                @elseif($item->status == 'diterima')
                                <span class="badge badge-success">{{$item->status}}</span>
                                @else
                                <span class="badge badge-danger">{{$item->status}}</span>
                                @endif
                            </td>
                            <td>
                                @if ($item->user == null)
                                Admin
                                @else
                                {{$item->user->name}}
                                @endif
                            </td>
                            <td class="text-right">

                                <a href="/superadmin/penerima/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/penerima/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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