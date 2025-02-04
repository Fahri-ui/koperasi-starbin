<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    function angsuran(){
        return view('admin.angsuran');
    }
}
