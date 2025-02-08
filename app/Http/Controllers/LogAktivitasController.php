<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogAktivitasController extends Controller
{
    public function logaktivitas()
    {
        return view('admin.log-aktivitas');
    }
}
