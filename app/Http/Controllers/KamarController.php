<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekamarRequest;
use App\Http\Requests\UpdatekamarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Kamar;

class KamarController extends Controller

{


    public function index()
    {
        $kamar = Kamar::all();
        return view('admin/kamar/index', compact('kamar'));
    }

    public function create()
    {
        return view('admin/kamar/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipe_kamar' => 'required',
            'photo' => 'nullable|image|max:2048',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        $new_kamar = new Kamar;
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('public/kamar/' , $fileName);
            $new_kamar->photo = $fileName;
        }
        $new_kamar->tipe_kamar = $request->tipe_kamar;
        $new_kamar->jumlah_kamar = $request->jumlah;
        $new_kamar->harga_kamar = $request->harga;
        $new_kamar->save();
        return redirect('/admin/kamar')->with('success', 'Berhasil tambah kamar!');
    }

    public function edit(Kamar $kamar)
    {
        return view('admin/kamar/edit', compact('kamar'));
    }

    public function update(Request $request, Kamar $kamar)
    {
        $this->validate($request, [
            'tipe_kamar' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'photo'=>'nullable|image|max:2048'
        ]);
        if ($request->hasFile('photo')) {
            $gambar = $request->file('photo');
            $nama_file = time() . $gambar->getClientOriginalName();
            Storage::putFileAs('public/gambar', $gambar, $nama_file);
            $kamar->photo = $nama_file;
        }
        $kamar->tipe_kamar = $request->tipe_kamar;
        $kamar->jumlah_kamar = $request->jumlah;
        $kamar->harga_kamar = $request->harga;
        $kamar->save();
        return redirect('/admin/kamar')->with('success', 'Berhasil update kamar!');
    }

    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect('/admin/kamar')->with('success', 'Berhasil hapus kamar!');
    }
}
