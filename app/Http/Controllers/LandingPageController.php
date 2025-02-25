<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;

class LandingPageController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::all();
        return view('welcome', compact('socialLinks'));
    }
}
