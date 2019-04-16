<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SinhVien;
use App\TaiKhoan;

class SinhVienController extends Controller
{
    public function getDanhsach()
    {
    	$dssv = SinhVien::all();
    	return view('admin.sinhvien.danhsach',['sinhvien'=>$dssv]);
    }

     public function getThem()
    {
    	$dstk = TaiKhoan::where('PhanQuyen',2)->get();
    	return view('admin.sinhvien.them',['taikhoan'=>$dstk]);
    }

    public function postThem(Request $request)
    {
    	$request->validate(
            [
                'maTK'=>'required',
                'tenSV'=>'required|min:6|max:15'
            ],[
                'maTK.required'=>'Bạn chưa chọn mã tài khoản',
                'tenSV.required'=>'Bạn chưa nhập tên sinh viên',
                'tenSV.min'=>'Tên sinh viên ít nhất 6 kí tự',
                'tenSV.max'=>'Tên sinh viên tối đa 15 kí tự'
            ]
        );

    	$sv = new SinhVien;
    	$sv->id = $request->maTK;
    	$sv->TenSV = $request->tensv;
    	$sv->GioiTinh = $request->gioitinh;
    	$sv->save();

    	return redirect('admin/sinhvien/them')->with('thongbao','Thêm sinh viên thành công');
    }

    public function getSua($id)
    {
    	$sv = SinhVien::find($id);
    	return view('admin.sinhvien.sua',['sinhvien'=>$sv]);
    }

    public function postSua(Request $request,$id)
    {
        $request->validate(
            [
                'maTK'=>'required',
                'tenSV'=>'required|min:6|max:15'
            ],[
                'maTK.required'=>'Bạn chưa chọn mã tài khoản',
                'tenSV.required'=>'Bạn chưa nhập tên sinh viên',
                'tenSV.min'=>'Tên sinh viên ít nhất 6 kí tự',
                'tenSV.max'=>'Tên sinh viên tối đa 15 kí tự'
            ]
        );
        
    	$sv = SinhVien::find($id);
    	$sv->TenSV = $request->tensv;
    	$sv->GioiTinh = $request->gioitinh;
    	$sv->save();
    	return redirect('admin/sinhvien/sua/'.$id)->with('thongbao','Sửa sinh viên thành công');
    }

    public function getXoa($id)
    {
    	$sv = SinhVien::find($id);
        if(count($sv->ketqua)>0){
            return redirect('admin/sinhvien/danhsach')->with('thongbao','Sinh viên có kết quả thi');
        } else {
            $sv->delete();
            return redirect('admin/sinhvien/danhsach')->with('thongbao','Xóa sinh viên thành công');
        }
    	
    }
}
