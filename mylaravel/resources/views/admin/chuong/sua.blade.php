@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chương {{$chuong->TenChuong}}</h1>
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

                            <form action="admin/chuong/sua/{{$chuong->id}}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Môn học</label>
                                    <select class="form-control" name="monhoc">
                                         @foreach($monhoc as $mh)
                                        <option 
                                         @if($chuong->idMH == $mh->id) {{"selected"}}
                                         @endif
                                        value="{{$mh->id}}">{{$mh->TenMH}}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên chương</label>
                                    <input name="tenchuong" class="form-control" value="{{$chuong->TenChuong}}">
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