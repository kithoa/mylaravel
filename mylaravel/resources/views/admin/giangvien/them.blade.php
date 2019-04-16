@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm giảng viên</h1>
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
                            <form action="admin/giangvien/them" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Mã tài khoản</label>
                                    <select name="maTK" class="form-control">
                                    @foreach ($taikhoan as $tk)
                                        <option value="{{$tk->id}}">{{$tk->id}} - {{$tk->TenTK}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên giảng viên</label>
                                    <input name="tenGV" class="form-control" placeholder="Nhập tên giảng viên">
                                </div>
                                <div class="form-group">
                                    <label>Trình độ</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="trinhDo" value="tiến sĩ" checked>tiến sĩ
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="trinhDo" value="thạc sĩ">thạc sĩ
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