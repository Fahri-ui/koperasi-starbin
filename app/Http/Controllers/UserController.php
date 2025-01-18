<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return view('user/home');
    }

    function profil()
    {
        return view('user/profil');
    }

    function pinjaman()
    {
        return view('user/pinjaman');
    }
    
    function simpanan()
    {
        return view('user/simpanan');
    }
}
