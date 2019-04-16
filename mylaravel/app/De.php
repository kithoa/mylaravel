<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class De extends Model
{
    protected $table = 'de';

    public function cauhoi()
    {
    	return $this->belongsToMany('App\CauHoi','cauhoi_de','de_id','cauhoi_id');
    }

    public function monhoc() 
    {
    	return $this->belongsTo('App\MonHoc','idMH','id');
    }

    public function giangvien()
    {
        return $this->belongsTo('App\GiangVien','idGV','id');
    }

    public function ketqua()
    {
        return $this->hasMany('App\KetQua','idDe','id');
    }
}
