<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\TuyenDung;
use App\MonHoc;
class TuyenDungController extends Controller
{
    public function getDanhsach()
    {      
        $dstd = TuyenDung::all();
        return view('admin.tuyendung.danhsach',['tuyendung'=>$dstd]);
    }

    public function getThem()
    {
        $dsmh = MonHoc::all();
         // $dsda = DapAn::all();
        //chuong: bien luudu lieu dsc 
    	return view('admin.tuyendung.them',['monhoc'=>$dsmh]);
    }

    public function postThem(Request $request)
    {
    	$td= new TuyenDung;
        $td->TieuDe = $request->tieude;
    	$td->NoiDungTD = $request->noidungtd;
        $td->idMH = $request->monhoc;
       $td->save();
       return redirect('admin/tuyendung/them')->with('thongbao','Thêm tin tuyển dụng thành công');
    
    }

    public function getSua($id)
    {
        $mh = MonHoc::all();
    	$td = TuyenDung::find($id);
    	return view('admin.tuyendung.sua',['tuyendung'=>$td,'monhoc'=>$mh]);
    }

    public function postSua(Request $request,$id)
    {
       
    	$td = TuyenDung::find($id);
        $td->TieuDe = $request->tieude;
        $td->NoiDungTD = $request->noidungtd;
        $td->save();
    	return redirect('admin/tuyendung/sua/'.$id)->with('thongbao','Sửa tin tuyển dụng thành công');
    }

    public function getXoa($id)
    {
    	$td = TuyenDung::find($id);
        $td->delete();
        return redirect('admin/tuyendung/danhsach')->with('thongbao','Xóa tin tuyển dụng thành công');
        
    }
}
