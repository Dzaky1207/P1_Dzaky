<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumberSuratController extends Controller
{
    public function index()
    {
        return view('sumber.index');
    }
}
