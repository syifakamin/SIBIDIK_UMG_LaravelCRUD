<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camaba extends Model
{
    protected $table = 'camaba';
    protected $fillable = ['id','no_reg','nama','fakultas','program_studi'];
}
 