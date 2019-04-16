<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = 'cau_hoi';

    public $timestamps = false;

    public function de()
    {
        return $this->belongsToMany('App\De','cauhoi_de','cauhoi_id','de_id');
    }

    public function monhoc() 
    {
    	return $this->belongsTo('App\MonHoc','idMH','id');
    }

    public function chuong() 
    {
    	return $this->belongsTo('App\Chuong','idChuong','id');
    }

    public function dapan()
    {
        return $this->hasMany('App\DapAn','idCH','id');
    }

    public function dapandung()
    {
        return $this->belongsTo('App\DapAn','idDADung','id');
    }

    public function giangvien()
    {
        return $this->belongsTo('App\GiangVien','idGV','id');
    }
}