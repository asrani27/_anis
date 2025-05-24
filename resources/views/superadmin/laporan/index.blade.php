@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Laporan Per Bulan</h3>

                <div class="card-tools">

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <form method="get" action="/superadmin/laporan/jenis" target="_blank">
                    @csrf

                    <select class="form-control" name="jenis" required>
                        <option value="">-jenis laporan-</option>
                        <option value="1">Verifikator</option>
                        <option value="2">Permohonan Disetujui</option>
                        <option value="3">Permohonan Ditolak</option>
                        <option value="4">Data Pemohon</option>
                    </select>
                    <br />
                    <button type="submit" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-print"></i>
                        Print</button>

                </form>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection