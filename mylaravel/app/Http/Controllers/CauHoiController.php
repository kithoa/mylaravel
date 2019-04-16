<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Chuong;
use App\DapAn;
use App\CauHoi;
use App\MonHoc;

class CauHoiController extends Controller
{
    public function getDanhsach()
    {
        if(Auth::user()->PhanQuyen == 0){
            $dsch = CauHoi::all();
            return view('admin.cauhoi.danhsach',['cauhoi'=>$dsch]);
        } else {
            $gv = Auth::user()->id;
            $dsch = CauHoi::where('idGV',$gv)->get();
            return view('admin.cauhoi.danhsach',['cauhoi'=>$dsch]);
        }
    }

    public function getThem()
    {
    	$dsc = Chuong::all();
        $dsmh = MonHoc::all();
         // $dsda = DapAn::all();
        //chuong: bien luudu lieu dsc 
    	return view('admin.cauhoi.them',['chuong'=>$dsc,'monhoc'=>$dsmh]);
    }

    public function postThem(Request $request)
    {
    	$ch = new CauHoi;
    	$ch->NoiDungCH = $request->noidungch;
    	$ch->ThangDiem = $request->thangdiem;
        $ch->idMH = $request->monhoc;
        $ch->idChuong = $request->chuong;
        $ch->save();

        $i=1;
        
        $dsda = $request->da;
        foreach ($dsda as $d) {
             $dapan=new DapAn;
             $dapan->noidungda=$d;
             $dapan->idCH=$ch->id;
             $dapan->save();
             if($i == $request->dadung){
                $ch->idDADung=$dapan->id;
                $ch->save();
             }
             $i++;
         } 

    	 return redirect('them')->with('thongbao','Thêm câu hỏi thành công');
    
    }

    public function getSua($id)
    {
        $mh = MonHoc::all();
        $c = Chuong::all();
    	$ch = CauHoi::find($id);
    	return view('admin.cauhoi.sua',['cauhoi'=>$ch,'chuong'=>$c,'monhoc'=>$mh]);
    }

    public function postSua(Request $request,$id)
    {
       
    	$ch = CauHoi::find($id);
        $ch->NoiDungCH = $request->noidungch;
        $ch->ThangDiem = $request->thangdiem;
        $ch->idMH = $request->monhoc;
        $ch->idChuong = $request->chuong;
        $ch->save();

        $i=1;
        // $a = CauHoi::find($ch->id);
        $dsda = $request->da;
        foreach ($dsda as $d) {
             $dapan=new DapAn;
             $dapan->noidungda=$d;
             $dapan->idCH=$ch->id;
             $dapan->save();
             if($i == $request->dadung){
                $ch->idDADung=$dapan->id;
                $ch->save();
             }
             $i++;
         } 
    	return redirect('admin/cauhoi/sua/'.$id)->with('thongbao','Sửa câu hỏi thành công');
    }

    public function getXoa($id)
    {
    	$ch = CauHoi::find($id);
        if(count($ch->de)>0){
            return redirect('admin/cauhoi/danhsach')->with('thongbao','Câu hỏi đã tạo đề');
        } else {
            $ch->idDADung=NULL;
            $ch->save();
            foreach ($ch->dapan as $value) {
                $value->delete();
            }
            $ch->delete();
            return redirect('admin/cauhoi/danhsach')->with('thongbao','Xóa câu hỏi thành công');
        }
    }
}
