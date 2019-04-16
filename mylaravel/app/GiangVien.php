<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    protected $table = 'giang_vien';

    public $timestamps = false;

    public function taikhoan() 
    {
    	return $this->belongsTo('App\TaiKhoan','id','id');
    }

    public function cauhoi()
    {
        return $this->hasMany('App\CauHoi','idGV','id');
    }

    public function de()
    {
    	return $this->hasMany('App\De','idGV','id');
    }

    public function ketqua()
    {
        return $this->hasManyThrough('App\KetQua','App\De','idGV','idDe','id');
    }
}
