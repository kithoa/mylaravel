@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Môn học {{$monhoc->TenMH}}</h1>
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
                            <form action="admin/monhoc/sua/{{$monhoc->id}}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Mã môn học</label>
                                    <input name="maMH" class="form-control" placeholder="Nhập mã môn học" value="{{$monhoc->id}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Tên môn học</label>
                                    <input name="tenMH" class="form-control" placeholder="Nhập tên môn học" value="{{$monhoc->TenMH}}">
                                </div>
                                <div class="form-group">
                                   <label>Số tín chỉ</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="1"
                                        @if($monhoc->SoTinChi == 1)
                                        {{"checked"}}
                                        @endif>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="2"
                                        @if($monhoc->SoTinChi == 2)
                                        {{"checked"}}
                                        @endif>2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="3"
                                        @if($monhoc->SoTinChi == 3)
                                        {{"checked"}}
                                        @endif>3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="4"
                                        @if($monhoc->SoTinChi == 4)
                                        {{"checked"}}
                                        @endif>4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="5"
                                        @if($monhoc->SoTinChi == 5)
                                        {{"checked"}}
                                        @endif>5
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