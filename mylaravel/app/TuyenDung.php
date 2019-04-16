<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuyenDung extends Model
{
    protected $table = 'tuyen_dung';

    public function monhoc() 
    {
    	return $this->belongsTo('App\MonHoc','idMH','id');
    }
}
 