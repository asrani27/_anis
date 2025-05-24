<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/barito.png'))) }}"
                    width="70px"> &nbsp;&nbsp;
            </td>
            <td style="text-align: center;" width="60%">
                <font size="24px"><b>BIDANG KESEJAHTERAAN RAKYAT<br />
                        SEKRETARIAT DAERAH KABUPATEN BARITO SELATAN<br /></b></font>
                Jl. Pelita Raya no 305F, buntok , Barito Selatan, Kalimantan Tengah
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA PERMOHONAN DITOLAK
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Nama</th>
            <th>Verifikator</th>
            <th>Bantuan Yang Di Dapat</th>
            <th>Status</th>
            <th>Tanggal Pencairan</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}</td>
            <td>{{$item->jenis}}</td>
            <td>{{$item->penerima}}</td>
            <td>{{$item->verifikator == null ? '': $item->verifikator->nama}}</td>
            <td>{{$item->hibah == null ? '': $item->hibah->nama}}</td>
            <td>
                @if ($item->status == null)
                <span class="badge badge-warning">di proses</span>
                @elseif($item->status == 'diterima')
                <span class="badge badge-success">{{$item->status}}</span>
                @else
                <span class="badge badge-danger">{{$item->status}}</span>
                @endif
            </td>
            <td>{{\Carbon\Carbon::parse($item->tanggal_cair)->format('d M Y')}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Buntok, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Mengetahui, <br />
                Kepala Bidang Kesra Setda<br /><br /><br /><br /><br />

                <u>-</u><br />
                NIP.
            </td>
        </tr>
    </table>
</body>

</html>