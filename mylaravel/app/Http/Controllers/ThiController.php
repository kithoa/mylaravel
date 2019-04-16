<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\De;
use App\KetQua;

class ThiController extends Controller
{
    public function getDanhsach()
    {
        $dsde = De::all();
        return view('admin.thi.danhsach',['de'=>$dsde]);
    }

    public function getPhatDe($id)
    {
        $de = De::find($id);
        $dsch = $de->cauhoi;
        return view('admin.thi.phatde',['d'=>$de,'ch'=>$dsch]);
    }

    public function postPhatDe(Request $request, $id)
    {
        $dsda = De::find($id)->cauhoi;
        $tongdiem = 0;
        foreach ($dsda as $value) {
            $tongdiem += $value->ThangDiem;
        }
        $diem = 0;
        $sai = 0;
        $dung = 0;

        for ($i=0 ; $i<count($dsda) ; $i++){
            if(isset($request->da[$i])){
                if($request->da[$i]==$dsda[$i]->idDADung){
                    $dung++;
                    $diem += $dsda[$i]->ThangDiem;
                }
                else{
                    $sai++;
                }
            }
            else $sai++;
        }

        $kq = new KetQua;
        $kq->SoCauDung = $dung;
        $kq->SoCauSai = $sai;
        $kq->Diem = $diem;

        $diemtb = $tongdiem/2;
        $lt = round($diem);
        $dtb = round($diemtb);
        if($lt >= $dtb){
            if($lt == $tongdiem || $lt == $tongdiem-1){
                $kq->XepLoai = "Giỏi";
            }
            else if($lt == $dtb){
                $kq->XepLoai = "Trung bình";
            }
            else $kq->XepLoai = "Khá";
        }
        else $kq->XepLoai = "Yếu";

        $kq->idDe = $id;
        $kq->idSV = Auth::user()->id;
        $kq->save();

        return view('admin.thi.ketqua',['ketqua'=>$kq,'td'=>$tongdiem]);
    }
}
