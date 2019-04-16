<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TaiKhoan;

class TaiKhoanController extends Controller
{
    public function getDanhsach()
    {
    	$dstk = TaiKhoan::all();
    	return view('admin.taikhoan.danhsach',['taikhoan'=>$dstk]);
    }

    public function getThem()
    {
    	return view('admin.taikhoan.them');
    }

    public function postThem(Request $request)
    {
        $request->validate(
            [
                'tenTK'=>'required|min:4|max:15',
                'email'=>'required|email',
                'matKhau'=>'required|min:6|max:32'
            ],[
                'tenTK.required'=>'Bạn chưa nhập tên tài khoản',
                'tenTK.min'=>'Tên tài khoản ít nhất 4 kí tự',
                'tenTK.max'=>'Tên tài khoản tối đa 15 kí tự',
                'email.required'=>'Bạn chưa nhập Email',
                'email.email'=>'Email chưa đúng định dạng',
                'matKhau.required'=>'Bạn chưa nhập mật khẩu',
                'matKhau.min'=>'Mật khẩu ít nhất 6 kí tự',
                'matKhau.max'=>'Mật khẩu tối đa 32 kí tự'
            ]
        );

    	$tk = new TaiKhoan;
    	$tk->TenTK = $request->tenTK;
    	$tk->Email = $request->email;
    	$tk->MatKhau = bcrypt($request->matKhau);
    	$tk->PhanQuyen = $request->phanquyen;
    	$tk->save();

    	return redirect('admin/taikhoan/them')->with('thongbao','Thêm tài khoản thành công');
    }

    public function getSua($id)
    {
    	$tk = TaiKhoan::find($id);
    	return view('admin.taikhoan.sua',['taikhoan'=>$tk]);
    }

    public function postSua(Request $request,$id)
    {
        $request->validate(
            [
                'tenTK'=>'required|min:4|max:15',
                'email'=>'required|email',
                'matKhau'=>'required|min:6|max:32'
            ],[
                'tenTK.required'=>'Bạn chưa nhập tên tài khoản',
                'tenTK.min'=>'Tên tài khoản ít nhất 4 kí tự',
                'tenTK.max'=>'Tên tài khoản tối đa 15 kí tự',
                'email.required'=>'Bạn chưa nhập Email',
                'email.email'=>'Email chưa đúng định dạng',
                'matKhau.required'=>'Bạn chưa nhập mật khẩu',
                'matKhau.min'=>'Mật khẩu ít nhất 6 kí tự',
                'matKhau.max'=>'Mật khẩu tối đa 32 kí tự'
            ]
        );
        
    	$tk = TaiKhoan::find($id);
    	$tk->TenTK = $request->tenTK;
    	$tk->Email = $request->email;
    	$tk->MatKhau = bcrypt($request->matKhau);
    	$tk->PhanQuyen = $request->phanquyen;
    	$tk->save();

    	return redirect('admin/taikhoan/sua/'.$id)->with('thongbao','Sửa tài khoản thành công');
    }

    public function getXoa($id)
    {
    	$tk = TaiKhoan::find($id);
        if($tk->PhanQuyen == 1){
            if(count($tk->giangvien->ketqua)>0){
                return redirect('admin/taikhoan/danhsach')->with('thongbao','Giảng viên có danh sách kết quả thi');
            } else {
                $tk->delete();
                return redirect('admin/taikhoan/danhsach')->with('thongbao','Xóa giảng viên thành công');
            }
        } 
        else if($tk->PhanQuyen == 2) 
        {
            if(count($tk->sinhvien->ketqua)>0){
                return redirect('admin/taikhoan/danhsach')->with('thongbao','Sinh viên có kết quả thi');
            } else {
                $tk->delete();
                return redirect('admin/taikhoan/danhsach')->with('thongbao','Xóa sinh viên thành công');
            }
        }
        else {
            $tk->delete();
            return redirect('admin/taikhoan/danhsach')->with('thongbao','Xóa tài khoản thành công');
        }
    	
    }
}
