@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Môn học
                </div>
                <!-- hien thi thong bao loi -->
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </div>
                @endif
                 <!-- hien thi thong bao them thanh cong -->
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Mã môn học</th>
                                    <th>Tên môn học</th>
                                    <th>Số tín chỉ</th>
                                    <th>Số câu hỏi</th>
                                    <th>Chương</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($monhoc as $mh)
                                    <tr class="odd gradeX">
                                        <td>{{$mh->id}}</td>
                                        <td>{{$mh->TenMH}}</td>
                                        <td>{{$mh->SoTinChi}}</td>
                                        <td>{{count($mh->cauhoi)}}</td>
                                        <td><a href="admin/chuong/danhsach/{{$mh->id}}">Danh sách chương</a></td>
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            <a href="admin/monhoc/sua/{{$mh->id}}">Chỉnh sửa</a>
                                        </td>
                                        <td>
                                            @if(count($mh->cauhoi)>0)
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            Xóa
                                            @else
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            <a href="admin/monhoc/xoa/{{$mh->id}}">Xóa</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <a class="btn btn-primary btn-lg" href="admin/monhoc/them">
                        <i class="fa fa-fw">&#xf067</i>
                        Thêm môn học
                    </a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection