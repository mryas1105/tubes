<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    public function harga_format(){
        return "Rp." .number_format($this->harga_kamar,0,",",".");
    }
    public function FasilitasKamar()
    {
        return $this->hasMany(FasilitasKamar::class);
    }
}
