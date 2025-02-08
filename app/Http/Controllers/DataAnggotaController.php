<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAnggotaController extends Controller
{
    public function dataanggota()
    {
        return view('admin.data-anggota');
    }
}
