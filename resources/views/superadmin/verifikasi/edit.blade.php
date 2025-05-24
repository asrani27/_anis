@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/verifikasi/edit/{{$data->id}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control"
                            value="{{\Carbon\Carbon::parse($data->created_at)->format('Y-m-d')}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Pengajuan</label>
                        <select class="form-control" required name="jenis" readonly>
                            <option value="">-</option>
                            <option value="HIBAH" {{$data->jenis == 'HIBAH' ? 'selected':''}}>HIBAH</option>
                            <option value="BANSOS" {{$data->jenis == 'BANSOS' ? 'selected':''}}>BANSOS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="penerima" class="form-control" value="{{$data->penerima}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Verifikator</label>
                        <select class="form-control" required name="verifikator_id" required>
                            @foreach (verifikator() as $item)

                            <option value="{{$item->id}}" {{$data->verifikator_id == $item->id ?
                                'selected':''}}>{{$item->nama}}
                            </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hibah</label>
                        <select class="form-control" required name="hibah_id" required>
                            @foreach (hibah() as $item)

                            <option value="{{$item->id}}" {{$data->hibah_id == $item->id ?
                                'selected':''}}>{{$item->nama}}
                            </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="form-control" required name="status">
                            <option value="">-</option>
                            <option value="diterima" {{$data->status == 'diterima' ? 'selected':''}}>diterima</option>
                            <option value="ditolak" {{$data->status == 'ditolak' ? 'selected':''}}>ditolak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal cair</label>
                        <input type="date" name="tanggal_cair" class="form-control" value="{{$data->tanggal_cair}}"
                            required>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/superadmin/verifikasi" class="btn btn-danger">Kembali</a>
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