<?php

namespace App\Http\Controllers;

class SituationsController extends Controller
{
    public function index()
    {
        return view('situations.index');
    }

    public function create()
    {
        return view('situations.form');
    }
}
