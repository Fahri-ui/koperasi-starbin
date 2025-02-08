<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngsuranAdminController extends Controller
{
    public function angsuran()
    {
        return view('admin.angsuran-admin');
    }
}
