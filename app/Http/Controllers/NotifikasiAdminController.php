<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiAdminController extends Controller
{
    function notifikasiadmin()
    {
        return view('admin.notifikasi-admin');
    }
}
