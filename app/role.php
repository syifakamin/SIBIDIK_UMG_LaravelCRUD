<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','name','guard_name'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
