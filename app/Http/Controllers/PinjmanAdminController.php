<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjmanAdminController extends Controller
{
    function pinjamanadmin()
    {
        return view('admin.pinjaman-admin');
    }
}
