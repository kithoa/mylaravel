<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoiDe extends Model
{
    protected $table = 'cauhoi_de';

    public $timestamps = false;

    public function cauhoi() 
    {
    	return $this->belongsTo('App\CauHoi','cauhoi_id','de_id');
    }

    public function de() 
    {
    	return $this->belongsTo('App\De','de_id','cauhoi_id');
    }
}