<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananSukarelaAdminController extends Controller
{
    public function simpanansukarelaadmin()
    {
        return view('admin.simpanan-sukarela-admin');
    }
}
