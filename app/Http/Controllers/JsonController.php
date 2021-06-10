<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function index()
    {
        return view('json.index');
    }

    public function complex()
    {
        return view('json.complex');
    }

    public function moreComplex()
    {
        return view('json.more_complex');
    }
}
