<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{

    protected $fillable = [
        'nama_jenis',
        // Tambahkan atribut lain yang dapat diisi secara massal di sini
    ];

    use HasFactory;
    public function barang(){
        return $this->hasmany(Barang::class,'id_barang','id');
    }


}

