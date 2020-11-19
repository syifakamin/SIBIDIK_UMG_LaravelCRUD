<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_hitung_2 extends Model
{
    protected $table = 'nilai_hitung_2';
    protected $fillable = ['id','camaba_id','kriteria_id','nilai'];

    public function camaba()
    {
        return $this->belongsTo('App\Camaba');
    }

     public function kriteria()
     {
         return $this->belongsTo('App\kriteria');
     }
}
