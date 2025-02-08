<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikKeuanganController extends Controller
{
    public function statistikkeuangan()
    {
        return view('admin.statistik-keuangan');
    }
}
