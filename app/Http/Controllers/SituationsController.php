<?php

namespace App\Http\Controllers;

class SituationsController extends Controller
{
    public function create()
    {
        return view('situations.form');
    }
}
