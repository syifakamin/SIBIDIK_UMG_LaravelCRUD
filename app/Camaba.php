<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Camaba extends Model
{
    protected $table = 'camaba';
    protected $fillable = ['id','no_reg','nama','fakultas','program_studi'];

    public function hasil_perhitungan()
    {
        return $this->hasMany('App\hasil_perhitungan', 'foreign_key');
    }
}
 