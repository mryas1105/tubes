<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;
    protected $table = 'fasilitas_kamars';
    protected $fillable = ['kamar_id' , 'nama_fasilitas'];

    public function Kamar()
    {
        return $this->belongsTo(Kamar::class , 'kamar_id');
    }
}
