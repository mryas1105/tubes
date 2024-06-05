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
            'gambar' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        $new_kamar = new Kamar;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . $gambar->getClientOriginalName();
            Storage::putFileAs('public/gambar', $gambar, $nama_file);
            $new_kamar->gambar = $nama_file;
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
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . $gambar->getClientOriginalName();
            Storage::putFileAs('public/gambar', $gambar, $nama_file);
            $kamar->gambar = $nama_file;
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
