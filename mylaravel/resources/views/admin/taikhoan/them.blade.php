@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm tài khoản</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- hien thi thong bao loi -->
                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    <li>{{$err}}</li>
                                @endforeach
                            </div>
                            @endif
                            <!-- hien thi thong bao thanh cong -->
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif                            
                            <form action="admin/taikhoan/them" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Tên tài khoản</label>
                                    <input name="tenTK" class="form-control" placeholder="Nhập tên tài khoản">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="matKhau" class="form-control" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label>Phân quyền</label>
                                    <label class="radio-inline">
                                    	<input type="radio" name="phanquyen" value="0" checked>0
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="phanquyen" value="1">1
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="phanquyen" value="2">2
	                                </label>
                                </div>
                                <button type="submit" class="btn btn-default">Thêm</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection