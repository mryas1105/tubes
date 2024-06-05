<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateFaslilitasHotelRequest;
use App\Models\FaslilitasHotel;
use Illuminate\Support\Facades\Storage;


class FasilitasHotelController extends Controller
{

        public function index()
        {
            return view('admin.fasilitashotel.index', [
                'fasilitas' => FaslilitasHotel::all()
            ]);
        }

        public function create()
        {
            return view('admin.fasilitashotel.create');
        }

        public function store(Request $request)
        {
            $this->validate($request, [
                'nama_fasilitas' => 'required',
                'image' => 'required',
                'keterangan' => 'required',
            ]);
            $new_reservasi = new FaslilitasHotel();
            if ($request->hasFile('image')) {
                $gambar = $request->file('image');
                $nama_file = time() . $gambar->getClientOriginalName();
                Storage::putFileAs('public/kamar', $gambar, $nama_file);
                $new_reservasi->image = $nama_file;
            }
            $new_reservasi->nama_fasilitas = $request->nama_fasilitas;
            $new_reservasi->deskripsi_fasilitas = $request->keterangan;
            $new_reservasi->save();
            return redirect('/admin/fasilitashotel')->with('success', 'Berhasil tambah reservasi!');
        }

        public function edit(FaslilitasHotel $fasilitashotel)
        {
            return view('admin/fasilitashotel/edit', compact('fasilitashotel'));
        }

        public function update(Request $request, FaslilitasHotel $fasilitashotel)
        {
            $rules = [
                'nama_fasilitas' => 'required',
                'keterangan' => 'required',
                'image' => 'image'
            ];
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nama_file = time() . $image->getClientOriginalName();
                Storage::putFileAs('public/kamar', $image, $nama_file);
                $fasilitashotel->image = $nama_file;
            }
            $fasilitashotel->nama_fasilitas = $request->nama_fasilitas;
            $fasilitashotel->deskripsi_fasilitas = $request->deskripsi_fasilitas;
            $fasilitashotel->save();

            return redirect('admin/fasilitashotel')->with('success', 'Fasilitas Hotel telah berhasil diupdate!');
        }

};
