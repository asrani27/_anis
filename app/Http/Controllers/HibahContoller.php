<?php

namespace App\Http\Controllers;

use App\Models\Hibah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HibahContoller extends Controller
{
    public function index()
    {
        $data = Hibah::paginate(10);
        return view('superadmin.hibah.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.hibah.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Hibah::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/hibah');
    }
    public function edit($id)
    {
        $data = Hibah::find($id);
        return view('superadmin.hibah.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Hibah::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/hibah');
    }
    public function delete($id)
    {
        Hibah::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/hibah');
    }
}
