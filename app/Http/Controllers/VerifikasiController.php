<?php

namespace App\Http\Controllers;

use App\Models\Distribusi;
use App\Models\Penerima;
use App\Models\Tksk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerifikasiController extends Controller
{

    public function index()
    {
        $data = Penerima::paginate(10);
        return view('superadmin.verifikasi.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.verifikasi.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Penerima::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/verifikasi');
    }
    public function edit($id)
    {
        $data = Penerima::find($id);
        return view('superadmin.verifikasi.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Penerima::find($id)->update([
            'verifikator_id' => $req->verifikator_id,
            'hibah_id' => $req->hibah_id,
            'status' => $req->status,
            'tanggal_cair' => $req->tanggal_cair
        ]);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/verifikasi');
    }
    public function delete($id)
    {
        Penerima::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/verifikasi');
    }
}
