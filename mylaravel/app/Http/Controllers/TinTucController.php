<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\TinTuc;

class TinTucController extends Controller
{
    public function getDanhsach()
    {
        
         $dstt = TinTuc::all();
         return view('admin.tintuc.danhsach',['tintuc'=>$dstt]);
    }

    public function getThem()
    {
       
    	return view('admin.tintuc.them');
    }

    public function postThem(Request $request)
    {
    	$tt= new TinTuc;
        $tt->TieuDe = $request->tieude;
    	$tt->NoiDungTT = $request->noidungtt;
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $name=$file->getClientOriginalName();
            $Hinh=str_random(4)."_".$name;
            $duoi=$file->getClientOriginalExtension();
            if($duoi !='jpg' &&  $duoi !='png'  && $duoi !='jpeg')
            {
                return redirect('admin/tintuc/them')->with('thongbao','khong hop le');
            }
            while (file_exists("backend/image/".$Hinh)) {
                $Hinh=str_random(4)."_".$name;

            }
            $file->move("backend/image",$Hinh);
            $tt->Hinh=$Hinh;
        }
        else
        {
            $tt->Hinh="";
        }
       $tt->save();
       return redirect('admin/tintuc/them')->with('thongbao','Thêm tin tức thành công');
    }

    public function getSua($id)
    {
    	$tt = TinTuc::find($id);
    	return view('admin.tintuc.sua',['tintuc'=>$tt]);
    }

    public function postSua(Request $request,$id)
    {
       
    	$tt = TinTuc::find($id);
        $tt->TieuDe = $request->tieude;
        $tt->NoiDungTT = $request->noidungtt;
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $name=$file->getClientOriginalName();
            $Hinh=str_random(4)."_".$name;
            $duoi=$file->getClientOriginalExtension();
            if($duoi !='jpg' &&  $duoi !='png'  && $duoi !='jpeg')
            {
                return redirect('admin/TinTuc/them')->with('thongbao','khong hop le');
            }
            while (file_exists("backend/image/".$Hinh)) {
                $Hinh=str_random(4)."_".$name;

            }
            $file->move("backend/image",$Hinh);
            unlink("backend/image/".$tt->Hinh);
            $tt->Hinh=$Hinh;
        }
        $tt->save();
    	return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa tin tức thành công');
    }

    public function getXoa($id)
    {
    	$tt = TinTuc::find($id);
        $tt->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao','Xóa tin tức thành công');
        
    }
}
