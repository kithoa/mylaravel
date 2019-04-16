<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chuong;
use App\MonHoc;

class ChuongController extends Controller
{
    public function getDanhsach($id)
    {
    	$dsc = MonHoc::find($id)->chuong;
    	return view('admin.chuong.danhsach',['chuong'=>$dsc]);
    }

    public function getThem()
    {
        $dsmh = MonHoc::all();
    	return view('admin.chuong.them',['monhoc'=>$dsmh]);
    }

    public function postThem(Request $request)
    {
        $request->validate(
            [
                'monhoc'=>'required',
                'tenchuong'=>'required|min:6|max:15'
            ],[
                'tenchuong.required'=>'Bạn chưa nhập tên chương',
                'tenchuong.min'=>'Tên chương ít nhất 6 kí tự',
                'tenchuong.max'=>'Tên chương tối đa 15 kí tự',
                'monhoc.required'=>'Bạn chưa chọn môn học'
            ]
        );

    	$c = new Chuong();
        $c->TenChuong = $request->tenchuong;
    	$c->idMH = $request->monhoc;
    	$c->save();
    	return redirect('admin/chuong/them')->with('thongbao','Thêm chương thành công');

    	
    }

    public function getSua($id)
    {
        $mh = MonHoc::all();
    	$c = Chuong::find($id);
    	return view('admin.chuong.sua',['chuong'=>$c,'monhoc'=>$mh]);
    }

    public function postSua(Request $request,$id)
    {
        $request->validate(
            [
                'monhoc'=>'required',
                'tenchuong'=>'required|min:6|max:15'
            ],[
                'tenchuong.required'=>'Bạn chưa nhập tên chương',
                'tenchuong.min'=>'Tên chương ít nhất 6 kí tự',
                'tenchuong.max'=>'Tên chương tối đa 15 kí tự',
                'monhoc.required'=>'Bạn chưa chọn môn học'
            ]
        );

    	$c = Chuong::find($id);
        $c->TenChuong = $request->tenchuong;
        $c->idMH = $request->monhoc;
    	$c->save();

    	return redirect('admin/chuong/sua/'.$id)->with('thongbao','Sửa chương thành công');
    }

    public function getXoa($id)
    {
    	$c = Chuong::find($id);
    	$c->delete();

    	return redirect('admin/chuong/danhsach')->with('thongbao','Xóa chương thành công');
    }
}
