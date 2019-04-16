<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GiangVien;
use App\TaiKhoan;

class GiangVienController extends Controller
{
    public function getDanhsach()
    {
    	$dsgv = GiangVien::all();
    	return view('admin.giangvien.danhsach',['giangvien'=>$dsgv]);
    }

    public function getThem()
    {
    	$dstk = TaiKhoan::where('PhanQuyen',1)->get();
    	return view('admin.giangvien.them',['taikhoan'=>$dstk]);
    }

    public function postThem(Request $request)
    {
        $request->validate(
            [
                'maTK'=>'required',
                'tenGV'=>'required|min:6|max:15',
                'trinhdo'=>'required'
            ],[
                'maTK.required'=>'Bạn chưa chọn mã tài khoản',
                'tenGV.required'=>'Bạn chưa nhập tên giảng viên',
                'tenGV.min'=>'Tên giảng viên ít nhất 6 kí tự',
                'tenGV.max'=>'Tên giảng viên tối đa 15 kí tự',
                'trinhdo.required'=>'Bạn chưa chọn trình độ'
            ]
        );

    	$gv = new GiangVien;
        $gv->MaTk = $request->maTK;
    	$gv->TenGV = $request->tenGV;
        $gv->TrinhDo = $request->trinhDo;
    	$gv->save();

    	return redirect('admin/giangvien/them')->with('thongbao','Thêm giảng viên thành công');
    }

    public function getSua($id)
    {
        $dstk = TaiKhoan::where('PhanQuyen',1)->get();
    	$gv = GiangVien::find($id);
    	return view('admin.giangvien.sua',['giangvien'=>$gv,'taikhoan'=>$dstk]);
    }

    public function postSua(Request $request,$id)
    {
        $request->validate(
            [
                'tenGV'=>'required|min:6|max:15',
                'trinhdo'=>'required'
            ],[
                'tenGV.required'=>'Bạn chưa nhập tên giảng viên',
                'tenGV.min'=>'Tên giảng viên ít nhất 6 kí tự',
                'tenGV.max'=>'Tên giảng viên tối đa 15 kí tự',
                'trinhdo.required'=>'Bạn chưa chọn trình độ'
            ]
        );

    	$gv = GiangVien::find($id);
        $gv->MaTk = $request->maTK;
    	$gv->TenGV = $request->tenGV;
    	$gv->TrinhDo = $required->trinhDo;
    	$gv->save();

    	return redirect('admin/giangvien/sua/'.$id)->with('thongbao','Sửa giảng viên thành công');
    }

    public function getXoa($id)
    {
    	$gv = GiangVien::find($id);
        if(count($gv->ketqua)>0){
            return redirect('admin/giangvien/danhsach')->with('thongbao','Giảng viên có danh sách kết quả thi');
        } else {
            $gv->delete();
            return redirect('admin/giangvien/danhsach')->with('thongbao','Xóa giảng viên thành công');
        }
    }
}
