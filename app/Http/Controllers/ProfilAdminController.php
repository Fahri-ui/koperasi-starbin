<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilAdminController extends Controller
{
    function profil() 
    {
        return view('profil-admin');
    }
}
