<?php

namespace App\Http\Controllers;

use App\Models\Verifikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerifikatorContoller extends Controller
{
    public function index()
    {
        $data = Verifikator::paginate(10);
        return view('superadmin.verifikator.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.verifikator.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Verifikator::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/verifikator');
    }
    public function edit($id)
    {
        $data = Verifikator::find($id);
        return view('superadmin.verifikator.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Verifikator::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/verifikator');
    }
    public function delete($id)
    {
        Verifikator::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/verifikator');
    }
}
