<?php

namespace App\Http\Controllers;

use App\Models\Tksk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TkskController extends Controller
{
    public function index()
    {
        $data = Tksk::paginate(10);
        return view('superadmin.tksk.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.tksk.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Tksk::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/tksk');
    }
    public function edit($id)
    {
        $data = Tksk::find($id);
        return view('superadmin.tksk.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Tksk::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/tksk');
    }
    public function delete($id)
    {
        Tksk::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/tksk');
    }
}
