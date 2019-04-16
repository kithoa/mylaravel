<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KetQua extends Model
{
    protected $table = 'ket_qua';

    public function de() {
    	return $this->belongsTo('App\De','idDe','id');
    }

    public function user() {
    	return $this->belongsTo('App\TaiKhoan','idUser','id');
    }
}
