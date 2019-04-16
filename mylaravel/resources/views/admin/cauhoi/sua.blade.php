@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa câu hỏi</h1>
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

                            <!-- hien thi thong bao them thanh cong -->
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            
                            <form action="admin/cauhoi/sua/{{$cauhoi->id}}" method="post" role="form">
                                @csrf
                                 <div class="form-group">
                                    <label>Chọn môn học</label>
                                    <select class="form-control" name="MonHoc">
                                        @foreach($monhoc as $mh)
                                        <option value="{{$mh->id}}"
                                            @if($cauhoi->idMH==$mh->id)
                                                 {{"selected"}}
                                            @endif>{{$mh->TenMH}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Chương</label>
                                    <select class="form-control" name="Chuong">
                                        @foreach($chuong as $c)
                                        <option value="{{$c->id}}"
                                            @if($cauhoi->idChuong==$c->id)
                                                 {{"selected"}}
                                            @endif>{{$c->TenChuong}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Thang điểm</label>
                                    <input name="thangdiem" class="form-control" placeholder="Nhập thang điểm "  value="{{$cauhoi->ThangDiem}}" >
                                </div>
                                <div class="form-group">
                                    <label>Nội dung câu hỏi</label>
                                    <input name="noidungch" class="form-control" placeholder="Nhập nội dung câu hỏi"   value="{{$cauhoi->NoiDungCH}}" >
                                </div>
                                <div class="form-group">
                                    <label>Nhập A </label>
                                    <input name="da[]" class="form-control" placeholder="Nhập A">
                                </div>
                                <div class="form-group">
                                    <label>Nhập B </label>
                                    <input name="da[]" class="form-control" placeholder="Nhập B">
                                </div>
                                <div class="form-group">
                                    <label>Nhập C</label>
                                    <input name="da[]" class="form-control" placeholder="Nhập C">
                                </div>
                                <div class="form-group">
                                    <label>Nhập D </label>
                                    <input name="da[]" class="form-control" placeholder="Nhập D">
                                </div>
                                <div class="form-group">
                                    <label>Chọn đáp án đúng</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="dadung" value="1" checked>A
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="dadung" value="2">B
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="dadung" value="3">C
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="dadung" value="4">D
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Sửa</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>

                            <!-- bao loi validate -->
                            <!-- @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $e)
                                    {{$e}}<br>
                                @endforeach
                            </div>
                            @endif -->
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