<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilAdminController extends Controller
{
    function profiladmin()
    {
        return view('admin.profil-admin');
    }
}