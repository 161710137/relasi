<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $fillable = ['nama_mobil','gambar','harga','warna','transmisi','tahun_keluar','deskripsi','merk_id','tipe_id'];
    protected $timesTamps=true;


    public function merk (){
        return $this->hasOne('App\merk','merk_id');
    }
}
