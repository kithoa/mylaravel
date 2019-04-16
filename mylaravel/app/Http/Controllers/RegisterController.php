<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaiKhoan;//de su dung model users
use App\GiangVien;

class RegisterController extends Controller
{
    public function getRegister(){
    	return view('admin.register');
    }
//co 1 form vs phuwong thuc post -->request: lay dulieu theo id hoac name
    public function postRegister(Request $request){
    	//echo $request->username ;
    	//echo $request->password ;
    	//echo $request->password_confirmation ;
    	//echo $request->email ;
    	// muon lay du lieu trong form vs phuowng thuc post: dung csrf khai bao trong view

    	$tk = new TaiKhoan;
        $ten = strip_tags($request->tenTK);
        $pass = strip_tags($request->matkhau);
        $email=strip_tags($request->email);
    	//gan du lieu cho thuoc tinh name cua $user(user la thuc the , ten thuoc tinh phai giong voi bang user trong migration)
    	$tk->name = $ten;
    	$tk->email = $email;
    	$tk->password = bcrypt($pass);
        $tk->PhanQuyen = 1;
    	$tk->save();

        $gv = new Giangvien;
        $gv->id = $tk->id;
        $gv->TenGV = $tk->name;
        $gv->save();
    	 // return redirect('/')->with('thongbao','Đăng ký thành công');
    	return redirect('admin/register')->with('thongbao','Đăng ký thành công');
    }

}
