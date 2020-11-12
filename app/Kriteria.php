<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    protected $table = 'kriteria';
    protected $filltable = ['id','nama_kriteria','jenis','bobot'];
}