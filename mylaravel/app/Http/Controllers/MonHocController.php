<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MonHoc;

class MonHocController extends Controller
{
    public function getDanhsach()
    {
    	$dsmh = MonHoc::all();
    	return view('admin.monhoc.danhsach',['monhoc'=>$dsmh]);
    }

    public function getThem()
    {
    	return view('admin.monhoc.them');
    }

    public function postThem(Request $request)
    {

    	$request->validate(
            [
                'tenMH'=>'required|min:6|max:50'
            ],[
                'tenMH.required'=>'Bạn chưa nhập tên môn học',
                'tenMH.min'=>'Tên môn học ít nhất 6 kí tự',
                'tenMH.max'=>'Tên môn học tối đa 50 kí tự',
            ]
        );

    	$mh = new MonHoc();
    	$mh->TenMH = $request->tenMH;
    	$mh->SoTinChi = $request->soTC;
    	$mh->save();

    	return redirect('admin/monhoc/them')->with('thongbao','Thêm môn học thành công');
    }

    public function getSua($id)
    {
    	$mh = MonHoc::find($id);
    	return view('admin.monhoc.sua',['monhoc'=>$mh]);
    }

    public function postSua(Request $request,$id)
    {
        $request->validate(
            [
                'tenMH'=>'required|min:6|max:50'
            ],[
                'tenMH.required'=>'Bạn chưa nhập tên môn học',
                'tenMH.min'=>'Tên môn học ít nhất 6 kí tự',
                'tenMH.max'=>'Tên môn học tối đa 50 kí tự',
            ]
        );
        
    	$mh = MonHoc::find($id);
    	$mh->TenMH = $request->tenMH;
    	$mh->SoTinChi = $request->soTC;
    	$mh->save();

    	return redirect('admin/monhoc/sua/'.$id)->with('thongbao','Sửa môn học thành công');
    }

    public function getXoa($id)
    {
    	$mh = MonHoc::find($id);
        if(count($mh->cauhoi)>0){
            return redirect('admin/monhoc/danhsach')->with('thongbao','Môn học có câu hỏi');
        } else {
            $mh->delete();
            return redirect('admin/monhoc/danhsach')->with('thongbao','Xóa môn học thành công');
        }
    }
}
