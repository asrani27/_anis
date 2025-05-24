<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $data = Pengaduan::paginate(10);
        return view('superadmin.pengaduan.index', compact('data'));
    }
}
