<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $fillable = ['id','nama_kriteria','jenis','bobot'];

    public function hasil_perhitungan()
    {
        return $this->hasMany('App\hasil_perhitungan', 'foreign_key');
    }
}