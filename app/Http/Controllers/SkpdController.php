<?php

namespace App\Http\Controllers;

use App\Models\Skpd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkpdController extends Controller
{
    public function index()
    {
        $data = Skpd::paginate(10);
        return view('superadmin.skpd.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.skpd.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Skpd::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/skpd');
    }
    public function edit($id)
    {
        $data = Skpd::find($id);
        return view('superadmin.skpd.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Skpd::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/skpd');
    }
    public function delete($id)
    {
        Skpd::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/skpd');
    }
}
