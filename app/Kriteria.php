<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $fillable = ['id','nama_kriteria','jenis','bobot'];
}