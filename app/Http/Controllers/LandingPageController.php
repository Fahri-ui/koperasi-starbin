<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;
use App\Models\Setting; // Tambahkan model Setting

class LandingPageController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::all();
        $kontak = Setting::whereIn('key', ['alamat', 'telepon', 'email'])->get();
        return view('welcome', compact('socialLinks', 'kontak'));
    }
}
