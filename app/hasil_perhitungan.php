<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class hasil_perhitungan extends Model
{
    protected $table = 'hasil_perhitungan';
    protected $fillable = ['id','nilai','nilai_2','nilai_3','keputusan'];
    
    public function camaba()
    {
        return $this->belongsTo('App\Camaba');
    }

     public function kriteria()
     {
         return $this->belongsTo('App\kriteria');
     }
}
