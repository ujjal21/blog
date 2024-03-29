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

    public function arrayExample()
    {
        return view('json.array_example');
    }

    public function ajaxExample()
    {
        return view('json.ajax_example');
    }
}
