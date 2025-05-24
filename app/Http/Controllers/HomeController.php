<?php

namespace App\Http\Controllers;

use App\Models\Skpd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function superadmin()
    {
        return view('superadmin.home');
    }
}
