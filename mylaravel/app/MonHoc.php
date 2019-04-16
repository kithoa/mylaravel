<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'mon_hoc';

    public $timestamps = false;

    public function cauhoi()
    {
    	return $this->hasMany('App\CauHoi','idMH','id');
    }

    public function de()
    {
    	return $this->hasMany('App\De','idMH','id');
    }

    public function chuong()
    {
        return $this->hasMany('App\Chuong','idMH','id');
    }
}
