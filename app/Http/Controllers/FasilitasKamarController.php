<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Http\Requests\StoreFasilitasKamarRequest;
use App\Http\Requests\UpdateFasilitasKamarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\kamar;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fasilitaskamar.index', [
            'fasilitas' => FasilitasKamar::all(),
            'kamar' => kamar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitaskamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFasilitasKamarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kamar_id' => 'required',
            'nama_fasilitas' => 'required',
        ]);
        $fasilitasKamar = new FasilitasKamar();
        $fasilitasKamar->kamar_id = $request->kamar_id;
        $fasilitasKamar->nama_fasilitas = $request->nama_fasilitas;
        $fasilitasKamar->save();
        return redirect('/admin/kamar')->with('success', 'Berhasil tambah kamar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar $fasilitasKamar)
    {
        return view('admin.fasilitaskamar.edit', [
            'fasilitasKamar' => FasilitasKamar::find($fasilitasKamar->id),
            'kamar' => kamar::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasKamarRequest  $request
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasKamar $fasilitasKamar)
    {
        $this->validate($request, [
            'kamar_id' => 'required',
            'nama_fasilitas' => 'required',
        ]);

        $fasilitasKamar->kamar_id = $request->kamar_id;
        $fasilitasKamar->nama_fasilitas = $request->nama_fasilitas;
        $fasilitasKamar->save();
        return redirect('/admin/fasilitas_kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitasKamar)
    {
        //
    }
}
