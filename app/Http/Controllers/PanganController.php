<?php

namespace App\Http\Controllers;

use App\Models\Pangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PanganController extends Controller
{
    public function index()
    {
        $data = Pangan::paginate(10);
        return view('superadmin.pangan.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.pangan.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Pangan::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/pangan');
    }
    public function edit($id)
    {
        $data = Pangan::find($id);
        return view('superadmin.pangan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Pangan::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/pangan');
    }
    public function delete($id)
    {
        Pangan::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/pangan');
    }
}
