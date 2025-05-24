<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetugasController extends Controller
{
    public function index()
    {
        $data = Petugas::paginate(10);
        return view('superadmin.petugas.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.petugas.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Petugas::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/petugas');
    }
    public function edit($id)
    {
        $data = petugas::find($id);
        return view('superadmin.petugas.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Petugas::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/petugas');
    }
    public function delete($id)
    {
        Petugas::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/petugas');
    }
}
