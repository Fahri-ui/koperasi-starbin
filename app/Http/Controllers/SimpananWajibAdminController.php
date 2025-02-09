<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananWajibAdminController extends Controller
{
    public function simpananwajibadmin()
    {
        return view('admin.simpanan-wajib-admin');
    }
}
