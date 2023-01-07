<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ComplaintController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function Complaint()
    {
        return view('Complaint');
    }
    
}
