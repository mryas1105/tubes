<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Reservasi;

class ReservasiController extends Controller

{


    public function index()
    {
        $reservasi = Reservasi::all();
        return view('resepsionis/reservasi/index', compact('reservasi'));
    }

    public function create()
    {
        return view('resepsionis/reservasi/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipe_kamar' => 'required',
            'gambar' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        $new_reservasi = new Reservasi();
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . $gambar->getClientOriginalName();
            Storage::putFileAs('public/gambar', $gambar, $nama_file);
            $new_reservasi->gambar = $nama_file;
        }
        $new_reservasi->tipe_kamar = $request->tipe_kamar;
        $new_reservasi->jumlah_kamar = $request->jumlah;
        $new_reservasi->harga_kamar = $request->harga;
        $new_reservasi->save();
        return redirect('/resepsionis/reservasi')->with('success', 'Berhasil tambah reservasi!');
    }

    public function edit(Reservasi $reservasi)
    {
        return view('resepsionis/reservasi/edit', compact('reservasi'));
    }

    public function update(Request $request, Reservasi $reservasi)
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
            $reservasi->gambar = $nama_file;
        }
        $reservasi->tipe_kamar = $request->tipe_kamar;
        $reservasi->jumlah_kamar = $request->jumlah;
        $reservasi->harga_kamar = $request->harga;
        $reservasi->$reservasi->save();
        return redirect('/resepsionis/kamar')->with('success', 'Berhasil update reservasi!');
    }

    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();
        return redirect('/resepsionis/reservasi')->with('success', 'Berhasil hapus reservasi!');
    }
    public function status(Request $request, $id)
    {
        Reservasi::find($id)->update([
            'status' => $request->status
        ]);

        // if ($request->status === 'Check Out') {
        //     $p = Reservasi::where('id', $id)->first();

        //     kamar::find($p->kamar_id)->update([
        //         'jumlah_kamar' => $p->kamar->jumlah_kamar + $p->jumlah_kamar
        //     ]);
        // }

        return redirect('resepsionis/reservasi');
    }
}
