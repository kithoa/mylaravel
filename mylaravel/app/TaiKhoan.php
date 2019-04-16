<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'users';

    public function giangvien() {
    	return $this->hasOne('App\GiangVien','id','id');
    }

    public function sinhvien() {
    	return $this->hasOne('App\Sinhien','id','id');
    }

    public function admin() {
    	return $this->hasOne('App\Admin','id','id');
    }
}
