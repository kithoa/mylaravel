<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\TaiKhoan;
use App\SinhVien;
use App\Giangvien;
use App\De;
use App\KetQua;
use App\DapAn;
use App\TinTuc;
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

class PagesController extends Controller
{
    public $tambo;

    public function __construct()
    {
        if(Auth::check())
        {
            view()->share('nguoidung', Auth::user());
        }
    }

     public function getTrangChu() 
    {
        return view('sinhvien.pages.trangchu');
    }

    public function getLienHe() 
    {
        return view('sinhvien.pages.lienhe');
    }

    public function getDangNhap() 
    {
    	return view('sinhvien.pages.dangnhap');
    }

    public function postDangNhap(Request $request) 
    {
        if(Auth::attempt(['name'=>$request->tentk,'password'=>$request->matkhau]))
        {
            // return redirect('admin/thi/danhsach')->with('thongbao','Đăng nhập thành công');
            return view('sinhvien.pages.trangchu');
        } 
        else
        {
             return redirect()->back()->with(['thongbao'=>'Đăng nhập không thành công']);
        }
    }
    public function getDangXuat() 
    {
        Auth::logout();
        return view('sinhvien.pages.dangnhap');
    }
    
     public function getDangKy(){
    	return view('sinhvien.pages.dangky');
    }
//co 1 form vs phuwong thuc post -->request: lay dulieu theo id hoac name
    public function postDangKy(Request $request){
        $request->validate([
            
            'tenTK'=>'unique:users,name',
            'email'=>'unique:users,email',
        ],[
            'tenTK.unique'=>'ten tai khoan da ton tai',
            'email.unique'=>'email da ton tai'
        ]);

    	$tk = new TaiKhoan;
    	//gan du lieu cho thuoc tinh name cua $user(user la thuc the , ten thuoc tinh phai giong voi bang user trong migration)
    	$tk->name = $request->tenTK;
    	$tk->email = $request->email;
    	$tk->password = bcrypt($request->matkhau);
        $tk->PhanQuyen = 2;
    	$tk->save();

        $sv = new SinhVien;
        $sv->id = $tk->id;
        $sv->TenSV = $tk->name;
        $sv->save();

    	 // return redirect('/')->with('thongbao','Đăng ký thành công');
    	// echo"Đăng ký thành công";  
         return redirect()->back()->with(['thongbao'=>'Đăng ký thành công']);
      }

    public function getNguoiDung() 
    {
        return view('sinhvien.pages.nguoidung');
    }

     public function postNguoiDung(Request $request,$id) 
    {
        $request->validate([
            'matKhau' => 'required|min:5|max:10'
        ],[
            'matKhau.required' =>'k duoc bo trong', 
            'matKhau.min'=>'mat khau it nhat 5 ki tu',
            'matKhau.max'=>'mat khau toi da 10 ki tu'
        ]);
        $tk = TaiKhoan::find($id);
        $tk->name = $request->tenTK;
        $tk->email = $request->email;
        $tk->password = bcrypt($request->matKhau);
        $tk->save();
         return redirect()->back();
    }

    public function getThi()
    {
        $dsde = De::all();
        return view('sinhvien.pages.danhsachde',['de'=>$dsde]);
    }

     public function getPhatDe($id)
    {
        if(Auth::check())
        {
            $de = De::find($id);
            $dsch = array();
            foreach ($de->cauhoi as $value) {
                $dsch[] = $value;
            }
            shuffle($dsch);
            $dsda = array();
            foreach ($dsch as $v) {
                $dsda[] = $v;
            }
            return view('sinhvien.pages.phatde',['d'=>$de,'ch'=>$dsch,'ds'=>$dsda]);
        }
        else
            return redirect('dangnhap');
    }

    public function postPhatDe(Request $request, $id){
        $t1 = $request->tam1;
        $t2 = $request->tam2;
    
        $tongdiem = 0;
        foreach ($t2 as $value) {
            $tongdiem += $value;
        }
        $diem = 0;
        $sai = 0;
        $dung = 0;

        for ($i=0 ; $i<count($t1) ; $i++){
            if(isset($request->da[$i])){
                if($request->da[$i]==$t1[$i]){
                    $dung++;
                    $diem += $t2[$i];
                }
                else{
                    $sai++;
                }
            }
            else $sai++;
        }

        // $kq = new KetQua;
        // $kq->SoCauDung = $dung;
        // $kq->SoCauSai = $sai;
        // $kq->Diem = $diem;

        $diemtb = $tongdiem/2;
        $lt = round($diem);
        $dtb = round($diemtb);
        if($diem >= $dtb){
            if($diem == $tongdiem){
                echo "Gioi <br>";
                // $kq->XepLoai = "Giỏi";
            }
            else if($diem == $dtb){
                echo "Trung binh <br>";
                // $kq->XepLoai = "Trung bình";
            }
            else echo "Khá <br>";
            // else $kq->XepLoai = "Khá";
        }
        else echo "Yếu <br>";
        // else $kq->XepLoai = "Yếu";

        // $kq->idDe = $id;
        // $kq->idUser = Auth::user()->id;
        // $kq->save();

        // return view('sinhvien.pages.diem',['ketqua'=>$kq,'td'=>$tongdiem]);

        echo "Số câu đúng:".$dung."<br>";
        echo "Số câu sai:".$sai."<br>";
        echo "Tổng điểm:".$tongdiem."<br>";
        echo "Điểm:".$diem."<br>";
    }


     public function getTuyenDung() 
    {
        return view('sinhvien.pages.tuyendung');
    }
}
