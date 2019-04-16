<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MonHoc;
use App\CauHoi;
use App\Giandeien;
use App\De;
use App\KetQua;

class KetQuaController extends Controller
{
    public function getDanhsach()
    {
        $dskq = KetQua::all();
        return view('admin.ketqua.danhsach',['ketqua'=>$dskq]);
    }
}
