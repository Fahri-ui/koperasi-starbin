<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananPokokAdminController extends Controller
{
    function simpananpokokadmin()
    {
        return view('admin.simpanan-pokok-admin');
    }
}
