@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm môn học</h1>
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
                            <form action="admin/monhoc/them" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Tên môn học</label>
                                    <input name="tenMH" class="form-control" placeholder="Nhập tên môn học">
                                </div>
                                <div class="form-group">
                                    <label>Số tín chỉ</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="1" checked>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="soTC" value="5">5
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Thêm</button>
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