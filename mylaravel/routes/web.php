<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//sinhvien
Route::get('/','PagesController@getTrangChu');
Route::get('trangchu','PagesController@getTrangChu');
Route::get('lienhe','PagesController@getLienHe');
Route::get('tuyendung','PagesController@getTuyenDung');

Route::get('thi','PagesController@getThi');
Route::get('phatde/{id}','PagesController@getPhatDe');
Route::post('phatde/{id}',[
	'as' => 'xuly-phatde',
	'uses' => 'PagesController@postPhatDe'
]);

Route::get('dangnhap','PagesController@getDangNhap');
Route::post('dangnhap','PagesController@postDangNhap');

Route::get('dangky','PagesController@getDangKy');
Route::post('dangky','PagesController@postDangKy');

Route::get('dangxuat','PagesController@getDangXuat');

Route::get('nguoidung','PagesController@getNguoiDung');
Route::post('nguoidung/{id}','PagesController@postNguoiDung');

//giangvien
Route::get('giangvien',function(){
	return view('giangvien.layout.master');
});

//trang dang nhap
Route::get('admin/login','LoginController@getLogin');
Route::post('admin/login','LoginController@postLogin');

Route::get('admin/logout','LoginController@getLogout');

//trang dang ky
Route::get('admin/register','RegisterController@getRegister');
Route::post('admin/register','RegisterController@postRegister');

//trang admin
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function(){
	Route::group(['prefix'=>'monhoc'], function(){
		//admin/monhoc/danhsach
		Route::get('danhsach','MonHocController@getDanhsach');

		Route::get('them','MonHocController@getThem');
		Route::post('them','MonHocController@postThem');

		Route::get('sua/{id}','MonHocController@getSua');
		Route::post('sua/{id}','MonHocController@postSua');

		Route::get('xoa/{id}','MonHocController@getXoa');
	});

	
	Route::group(['prefix'=>'tuyendung'], function(){
		Route::get('danhsach','TuyenDungController@getDanhsach');

		Route::get('them','TuyenDungController@getThem');
		Route::post('them','TuyenDungController@postThem');

		Route::get('sua/{id}','TuyenDungController@getSua');
		Route::post('sua/{id}','TuyenDungController@postSua');

		Route::get('xoa/{id}','TuyenDungController@getXoa');
	});

	Route::group(['prefix'=>'tintuc'], function(){
		Route::get('danhsach','TinTucController@getDanhsach');

		Route::get('them','TinTucController@getThem');
		Route::post('them','TinTucController@postThem');

		Route::get('sua/{id}','TinTucController@getSua');
		Route::post('sua/{id}','TinTucController@postSua');

		Route::get('xoa/{id}','TinTucController@getXoa');
	});

	Route::group(['prefix'=>'chuong'], function(){
		//admin/monhoc/danhsach
		Route::get('danhsach/{id}','ChuongController@getDanhsach');

		Route::get('them','ChuongController@getThem');
		Route::post('them','ChuongController@postThem');

		Route::get('sua/{id}','ChuongController@getSua');
		Route::post('sua/{id}','ChuongController@postSua');

		Route::get('xoa/{id}','ChuongController@getXoa');
	});

	Route::group(['prefix'=>'taikhoan'], function(){
		Route::get('danhsach','TaiKhoanController@getDanhsach');

		Route::get('them','TaiKhoanController@getThem');
		Route::post('them','TaiKhoanController@postThem');

		Route::get('sua/{id}','TaiKhoanController@getSua');
		Route::post('sua/{id}','TaiKhoanController@postSua');

		Route::get('xoa/{id}','TaiKhoanController@getXoa');
	});

	Route::group(['prefix'=>'giangvien'], function(){
		Route::get('danhsach','GiangVienController@getDanhsach');

		Route::get('them','GiangVienController@getThem');
		Route::post('them','GiangVienController@postThem');

		Route::get('sua/{id}','GiangVienController@getSua');
		Route::post('sua/{id}','GiangVienController@postSua');

		Route::get('xoa/{id}','GiangVienController@getXoa');
	});

	Route::group(['prefix'=>'sinhvien'], function(){
		Route::get('danhsach','SinhVienController@getDanhsach');

		Route::get('them','SinhVienController@getThem');
		Route::post('them','SinhVienController@postThem');

		Route::get('sua/{id}','SinhVienController@getSua');
		Route::post('sua/{id}','SinhVienController@postSua');

		Route::get('xoa/{id}','SinhVienController@getXoa');
	});

	Route::group(['prefix'=>'de'], function(){
		Route::get('danhsach','DeController@getDanhsach');

		Route::get('them','DeController@getThem');
		Route::post('them','DeController@postThem');

		Route::get('sua/{id}','DeController@getSua');
		Route::post('sua/{id}','DeController@postSua');

		Route::get('xoa/{id}','DeController@getXoa');
	});

	Route::group(['prefix'=>'thi'], function(){
		Route::get('danhsach', 'ThiController@getDanhsach');

		Route::get('phatde/{id}', 'ThiController@getPhatDe');
		Route::post('phatde/{id}', 'ThiController@postPhatDe');
	});

	Route::group(['prefix'=>'cauhoi'], function(){
		Route::get('danhsach','CauHoiController@getDanhSach');

		Route::get('them','CauHoiController@getThem');
		Route::post('them','CauHoiController@postThem');

		Route::get('sua/{id}','CauHoiController@getSua');
		Route::post('sua/{id}','CauHoiController@postSua');

		Route::get('xoa/{id}','CauHoiController@getXoa');
	});

	Route::group(['prefix'=>'ketqua'], function(){
		Route::get('danhsach', 'KetQuaController@getDanhsach');
	});

	Route::group(['prefix'=>'ajax'], function(){
		Route::get('cauhoi/{idMonHoc}', 'AjaxController@getCauHoi');
	});
});

Route::get('/', 'PagesController@getTrangChu');

// use App\TaiKhoan;
// Route::get('thu', function(){
// 	$tk = TaiKhoan::find(1);
// 	echo $tk;
// 	echo $tk->tenAdmin;
// });

// use App\CauHoi;
// use App\GiangVien;
// use App\De;
// Route::get('thu', function(){
// 	$dsch = De::find(6)->cauhoi;
// 	foreach ($dsch as $v) {
// 		echo $v->id . "-";
// 		echo $v->NoiDungCH . "<br>" ;
// 		foreach ($v->dapan as $da) {
// 			echo $da->NoiDungDA . "<br>" ;
// 		}
// 	}
// });



// Route::get('', function() {
// 	if(Session::has('locale')){
// 		App::setlocale(Session::get('locale'));
// 	}
// 	return view()
// });

// use App\TaiKhoan;

// Route::get('login', function() {
// 	$tk = TaiKhoan::find('AD01');

//     print_r($tk);
// });

