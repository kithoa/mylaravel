@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Giảng viên {{$giangvien->TenGV}}</h1>
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
                            <form action="admin/giangvien/sua/{{$giangvien->id}}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Mã tài khoản</label>
                                    <select name="maTK" class="form-control">
                                    @foreach ($taikhoan as $tk)
                                        <option value="{{$tk->id}}"
                                            @if($giangvien->maTK == $tk->id)
                                                {{"select"}}
                                            @endif
                                        >{{$tk->id}} - {{$tk->TenTK}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên giảng viên</label>
                                    <input name="tenGV" class="form-control" placeholder="Nhập tên giảng viên" value="{{$giangvien->TenGV}}">
                                </div>
                                <div class="form-group">
                                    <label>Trình độ</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="trinhDo" value="tiến sĩ"
                                        @if($giangvien->TrinhDo == "tiến sĩ")
                                        {{checked}}
                                        @endif>tiến sĩ
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="trinhDo" value="thạc sĩ"
                                        @if($giangvien->TrinhDo == "thạc sĩ")
                                        {{checked}}
                                        @endif>thạc sĩ
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Sửa</button>
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