<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chuong extends Model
{
    protected $table = 'chuong';

    public $timestamps = false;

    public function monhoc() 
    {
    	return $this->belongsTo('App\MonHoc','idMH','id');
    }

    public function cauhoi() 
    {
    	return $this->hasMany('App\CauHoi','idChuong','id');
    }
}
