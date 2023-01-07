<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenemuanController extends Controller
{
    public function create()
    {
        return view('penemuan');
    }
}
