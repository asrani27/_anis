<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Pengaduan;
use App\Models\Distribusi;
use App\Models\Verifikator;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        return view('superadmin.laporan.index');
    }
    public function pdf()
    {
        $jenis = request()->get('jenis');
        if (request()->get('jenis') == '1') {
            $data = Verifikator::get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_verifikator', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '2') {
            $data = Penerima::where('status', 'diterima')->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_disetujui', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '3') {
            $data = Penerima::where('status', 'ditolak')->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_ditolak', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '4') {
            $data = Penerima::get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_pemohon', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
    public function bulan()
    {
        $bulan = request()->get('bulan');
        $tahun = request()->get('tahun');
        if (request()->get('jenis') == '1') {
            $data = Penerima::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_calon', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '2') {
            $data = Penerima::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->where('status', 'diterima')
                ->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_penerima', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '3') {
            $data = Distribusi::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_distribusi', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '4') {
            $data = Pengaduan::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_pengaduan', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
}
