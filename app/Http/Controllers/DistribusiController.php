<?php

namespace App\Http\Controllers;

use App\Models\Pangan;
use App\Models\Petugas;
use App\Models\Penerima;
use App\Models\Distribusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DistribusiController extends Controller
{

    public function index()
    {
        $data = Distribusi::paginate(10);
        return view('superadmin.distribusi.index', compact('data'));
    }
    public function add()
    {
        $penerima = Penerima::where('status', 'diterima')->get();
        $pangan = Pangan::get();
        $petugas = Petugas::get();
        return view('superadmin.distribusi.create', compact('penerima', 'pangan', 'petugas'));
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Distribusi::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/distribusi');
    }
    public function edit($id)
    {
        $penerima = Penerima::where('status', 'diterima')->get();
        $pangan = Pangan::get();
        $petugas = Petugas::get();
        $data = Distribusi::find($id);
        return view('superadmin.distribusi.edit', compact('penerima', 'pangan', 'petugas', 'data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Distribusi::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/distribusi');
    }
    public function delete($id)
    {
        Distribusi::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/distribusi');
    }
}
