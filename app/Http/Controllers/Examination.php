<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Examination extends Controller
{
    public function index()
    {
        return view('pemeriksaan/index');
    }
}
