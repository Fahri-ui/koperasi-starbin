<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    function bantuan()
    {
        return view('user/bantuan');
    }
}
