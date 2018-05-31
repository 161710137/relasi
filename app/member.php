<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = ['nama_lengkap','no_hp','alamat','mobil_id'];
    protected $timesTamp= true;

    public function mobil (){
        return $this->hasMany('App\mobil','mobil_id');
    }
}
