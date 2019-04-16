<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\TaiKhoan;

class AdminController extends Controller
{
    public function getDangNhapAdmin() {
    	return view('admin.login');
    }

    public function postDangNhapAdmin(Request $request) {

    	// $pass = DB::table('TaiKhoan')->select('MatKhau')->where('MaTK','like',$request->admin)->get();

    	// $tk = TaiKhoan::find('AD01');

    	// print_r($tk);

    	// if($tk !=  null) {
    	// 	$mk = $tk->MatKhau=>$request->Password;
    	// 	if(Auth::attempt([$mk])) {
	    // 		echo "DANG NHAP THANH CONG";
	    // 	}
	    // 	else
	    // 		echo "DANG NHAP KHONG THANH CONG";
    	// }
    }
}
