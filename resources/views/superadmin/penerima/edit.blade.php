@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/penerima/edit/{{$data->id}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control"
                            value="{{\Carbon\Carbon::parse($data->created_at)->format('Y-m-d')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Pengajuan</label>
                        <select class="form-control" required name="jenis">
                            <option value="">-</option>
                            <option value="HIBAH" {{$data->jenis == 'HIBAH' ? 'selected':''}}>HIBAH</option>
                            <option value="BANSOS" {{$data->jenis == 'BANSOS' ? 'selected':''}}>BANSOS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="penerima" class="form-control" value="{{$data->penerima}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <select class="form-control" required name="jkel">
                            <option value="">-jkel-</option>
                            <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                            <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <select class="form-control" required name="agama">
                            <option value="">-agama-</option>
                            <option value="ISLAM" {{$data->agama == 'ISLAM' ? 'selected':''}}>ISLAM</option>
                            <option value="KRISTEN" {{$data->agama == 'KRISTEN' ? 'selected':''}}>KRISTEN</option>
                            <option value="HINDU" {{$data->agama == 'HINDU' ? 'selected':''}}>HINDU</option>
                            <option value="BUDDHA" {{$data->agama == 'BUDDHA' ? 'selected':''}}>BUDDHA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" value="{{$data->kecamatan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kabupaten/kota</label>
                        <input type="text" name="kabupaten" class="form-control" value="{{$data->kabupaten}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">telp</label>
                        <input type="text" name="telp" class="form-control" value="{{$data->telp}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/superadmin/penerima" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function () {
    const triwulanOptions = {
    "1": ["1", "2"],
    "2": ["3", "4"]
    };

    const bulanOptions = {
    "1": ["Januari", "Februari", "Maret"],
    "2": ["April", "Mei", "Juni"],
    "3": ["Juli", "Agustus", "September"],
    "4": ["Oktober", "November", "Desember"]
    };

    $("#semester").change(function () {
    let semesterVal = $(this).val();
    $("#triwulan").html('<option value="">-triwulan-</option>');
    $("#bulan").html('<option value="">-bulan-</option>');

    if (semesterVal) {
    triwulanOptions[semesterVal].forEach(function (triwulan) {
    $("#triwulan").append('<option value="' + triwulan + '">' + triwulan + '</option>');
    });
    }
    });

    $("#triwulan").change(function () {
    let triwulanVal = $(this).val();
    $("#bulan").html('<option value="">-bulan-</option>');

    if (triwulanVal) {
    bulanOptions[triwulanVal].forEach(function (bulan) {
    $("#bulan").append('<option value="' + bulan + '">' + bulan + '</option>');
    });
    }
    });
    });
</script>
@endpush