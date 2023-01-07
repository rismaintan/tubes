<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;


class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::orderBy('id')->get();
        return view('home', ['pengaduans'=> $pengaduans]);
    }

    public function create()
    {
        return view('pengaduan');
    }

    public function store(Request $table) 
    {   
        $imgName = $table->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $table->img_path->extension();
        $table->img_path->move(public_path('image'), $imgName);
        Pengaduan::create([
            'user_id'       => $table   -> user_id,
            'jumlahBarang'  => $table   -> jumlahBarang,
            'namaBarang'    => $table   -> namaBarang,
            'lokasiTerakhir'=> $table   -> lokasiTerakhir,
            'kontak'        => $table   -> kontak,
            'deskripsi'     => $table   -> deskripsi,
            'image'         => $imgName
        ]);
        return redirect('/');
    }
    
}
