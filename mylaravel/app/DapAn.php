<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DapAn extends Model
{
    protected $table = 'dap_an';

    public $timestamps = false;

    public function cauhoi() 
    {
    	return $this->belongsTo('App\CauHoi','idCH','id');
    }
}
