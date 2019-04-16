<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinh_vien';

    public $timestamps = false;

    public function taikhoan() {
    	return $this->belongsTo('App\TaiKhoan','id','id');
    }
}
