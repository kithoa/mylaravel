<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\TaiKhoan;

class LoginController extends Controller
{
    public function getLogin() 
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate(
            [
                'tenTK'=>'required',
                'matkhau'=>'required'
            ],[
                'tenTK.required'=>'Bạn chưa nhập tên đăng nhập',
                'matkhau.required'=>'Bạn chưa nhập mật khẩu'
            ]
        );

        $ten = strip_tags($request->tenTK);
        $pass = strip_tags($request->matkhau);
        $arr = array('ten'=>$ten,'pass'=>$pass);
        if(Auth::attempt(['name'=>$ten,'password'=>$pass]))
        {
            if(Auth::user()->PhanQuyen==0)
                return redirect('admin/taikhoan/danhsach');
            else
                return redirect('admin/cauhoi/danhsach');
        }
        else
        {
            $request->session()->put('arrReq',$arr);
            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getLogout() 
    {
        Auth::logout();
        return redirect('admin/login');
    }
    
}
