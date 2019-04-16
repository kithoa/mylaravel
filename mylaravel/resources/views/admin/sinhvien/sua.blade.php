@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SinhVien{{$sinhvien->TenSV}}</h1>
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
                            <form action="admin/sinhvien/sua/{{$sinhvien->id}}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Tên sinh viên</label>
                                    <input name="tensv" class="form-control" placeholder="Nhập tên sinh viên" value="{{$sinhvien->TenSV}}">
                                </div>
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gioitinh" value="0" checked>Nam
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gioitinh" value="1">Nữ
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