<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    public function pengajuan()
    {
        return view('admin.data-pengajuan');
    }
}
