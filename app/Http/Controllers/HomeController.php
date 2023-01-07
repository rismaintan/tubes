<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $pengaduan = Pengaduan::all();
        return view('home', compact('pengaduan'));
    }
}
