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
                        <label for="exampleInputEmail1">Nama Penerima</label>
                        <select class="form-control" name="penerima_id">

                            @foreach ($penerima as $item)
                            <option value="{{$item->id}}" {{$data->id == $item->id ? 'selected':''}}>{{$item->penerima}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Tksk</label>
                        <select class="form-control" name="tksk_id">

                            @foreach ($tksk as $item)
                            <option value="{{$item->id}}" {{$data->tksk_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status Verifikasi</label>
                        <select class="form-control" name="status">
                            <option value="" {{$data->status == null ? 'selected':''}}>Diproses</option>
                            <option value="diterima" {{$data->status == 'diterima' ? 'selected':''}}>Diterima</option>
                            <option value="ditolak" {{$data->status == 'ditolak' ? 'selected':''}}>Ditolak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{$data->keterangan}}">
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