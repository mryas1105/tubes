<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Models\FaslilitasHotel;
use App\Models\kamar;

class PageController extends Controller
{
    public function index()
    {
        $fasilitas_hotels = FaslilitasHotel::all();
        $kamars = kamar::all();
        $fasilitasKamar = FasilitasKamar::all();
        return view('user.home',compact('fasilitas_hotels','kamars' , 'fasilitasKamar'));
    }
    //
    public function pesanKamar(Request $request)
    {
        // dd(1);
        $validation = $this->validate($request, [
            'nama_pemesan' => 'required',
            'email' => 'required',
            'no' => 'required',
            'nik' => 'required',
            'tgl_cekin' => 'required',
            'tgl_cekout' => 'required',
        ]);

        $reservasi = new Reservasi;
        $reservasi->tanggal_check_in = $request->tgl_cekin;
        $reservasi->tanggal_check_out = $request->tgl_cekout;
        $reservasi->nama_pemesan = $request->nama_pemesan;
        $reservasi->no_pemesan = $request->no;
        $reservasi->email_pemesan = $request->email;
        $reservasi->nik = $request->nik;
        $reservasi->kamar_id = $request->tipe_kamar;
        $reservasi->status = 'Booking';
        $reservasi->save();
        return redirect('/reservasi');
    }
}

