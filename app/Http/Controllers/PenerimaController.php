<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenerimaController extends Controller
{
    public function index()
    {
        $data = Penerima::paginate(10);
        return view('superadmin.penerima.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.penerima.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Penerima::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/penerima');
    }
    public function edit($id)
    {
        $data = Penerima::find($id);
        return view('superadmin.penerima.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Penerima::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/penerima');
    }
    public function delete($id)
    {
        Penerima::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/penerima');
    }
}
