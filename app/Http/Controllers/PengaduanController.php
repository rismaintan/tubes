<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::orderBy('id')->get();
        return view('pengaduan.daftar', compact('pengaduans'));
    }

    public function create()
    {
        return view('pengaduan.buat');
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
    public function show(Pengaduan $pengaduan){
        return view('pengaduan.detail', compact('pengaduan'));
    }
    public function edit(Pengaduan $pengaduan){
         return view('pengaduan.edit', compact('pengaduan'));
    }
    public function update(Request $request, Pengaduan $pengaduan){
        
        //validate form
        $this->validate($request, [
            'image'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jumlahBarang'      => 'required',
            'namaBarang'        => 'required',
            'lokasiTerakhir'    => 'required',
            'kontak'            => 'required',
            'deskripsi'         => 'required'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$pengaduan->image);

            //update post with new image
            $pengaduan->update([
                'image'     => $image->hashName(),
                'namaBarang'     => $request->namaBarang,
                'jumlahBarang'   => $request->jumlahBarang,
                'lokasiTerakhir' => $request->lokasiTerakhir,
                'kontak'         => $request->kontak,
                'deskripsi'      => $request->deskripsi
            ]);

        } else {

            //update post without image
            $pengaduan->update([
                'namaBarang'     => $request->namaBarang,
                'jumlahBarang'   => $request->jumlahBarang,
                'lokasiTerakhir' => $request->lokasiTerakhir,
                'kontak'         => $request->kontak,
                'deskripsi'      => $request->deskripsi
            ]);
        }

        //redirect to index
        return redirect()->route('pengaduan.show', $pengaduan->id)->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(Pengaduan $pengaduan){
        //delete image
        Storage::delete('public/posts/'. $pengaduan->image);

        //delete post
        $pengaduan->delete();

        //redirect to index
        return redirect()->route('pengaduan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
