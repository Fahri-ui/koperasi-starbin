<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControlController extends Controller
{
    function index()
    {
        return view('admin/usercontrol');
    }
}
