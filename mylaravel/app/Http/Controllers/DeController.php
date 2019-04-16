<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\MonHoc;
use App\CauHoi;
use App\GiangVien;
use App\De;

class DeController extends Controller
{
    public function getDanhsach()
    {
        if(Auth::user()->PhanQuyen == 0){
            $de = De::all();
            return view('admin.de.danhsach',['d'=>$de]);
        } else {
            $gv = Auth::user()->id;
            $de = De::where('idGV',$gv)->get();
            return view('admin.de.danhsach',['d'=>$de]);
        }
    }

    public function getThem()
    {
        $dsmh = MonHoc::all();
        $dsch = CauHoi::all();
        return view('admin.de.them',['monhoc'=>$dsmh,'cauhoi'=>$dsch]);
    }

    public function postThem(Request $request)
    {
        $request->validate(
            [
                'maMH'=>'required',
                'tenDe'=>'required|min:3|max:20',
                'ch'=>'required'
            ],[
                'tenDe.required'=>'Bạn chưa nhập tên đề',
                'tenDe.min'=>'Tên đề ít nhất 3 kí tự',
                'tenDe.max'=>'Tên đề tối đa 20 kí tự',
                'maMH.required'=>'Bạn chưa chọn môn học',
                'ch.required'=>'Bạn chuu7a chọn câu hỏi'
            ]
        );

        $de = new De;
        $de->idMH = $request->maMH;
        $de->TenDe = $request->tenDe;
        $de->idGV = Auth::user()->id;
        $de->save();
        $de->cauhoi()->attach($request->ch);

        return redirect('admin/de/them')->with('thongbao','Tạo đề thi thành công');        
    }

    public function getSua($id)
    {
    	$de = De::find($id);
        if(count($de->ketqua)){
            return redirect('admin/de/danhsach')->with('thongbao','Đề thi đã có kết quả');
        } else {
            $dsch = CauHoi::where('idMH',$de->idMH)->get();
            $cauhoide = array();
            foreach ($de->cauhoi as $v) {
                 $cauhoide[]=$v->id;
             }

            return view('admin.de.sua',['d'=>$de,'cauhoi'=>$dsch,'chd'=>$cauhoide]);
        }   
    }

    public function postSua(Request $request,$id)
    {
        $request->validate(
            [
                'tenDe'=>'required|min:3|max:20',
                'ch'=>'required'
            ],[
                'tenDe.required'=>'Bạn chưa nhập tên đề',
                'tenDe.min'=>'Tên đề ít nhất 3 kí tự',
                'tenDe.max'=>'Tên đề tối đa 20 kí tự',
                'ch.required'=>'Bạn chưa chọn câu hỏi'
            ]
        );

    	$de = De::find($id);
        $de->TenDe = $request->tenDe;
        $de->cauhoi()->detach();
        $de->cauhoi()->attach($request->ch);
    	$de->save();

    	return redirect('admin/de/sua/'.$id)->with('thongbao','Sửa đề thành công');
    }

    public function getXoa($id)
    {
    	$de = De::find($id);
        if(count($de->ketqua)>0){
            return redirect('admin/de/danhsach')->with('thongbao','Đề đã có kết quả');
        } else {
            $de->cauhoi()->detach();
            $de->delete();
            return redirect('admin/de/danhsach')->with('thongbao','Xóa đề thành công');
        }
    	
    }
}
