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
                    Đề
                </div>
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
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Mã đề</th>
                                    <th>Tên đề</th>
                                    <th>Môn học</th>
                                    <th>Giảng viên ra đề</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($d as $v)
                                    <tr class="odd gradeX">
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->TenDe}}</td>
                                        <td>{{$v->monhoc->TenMH}}</td>
                                        <td>{{$v->giangvien->TenGV}}</td>
                                        @if(count($v->ketqua)>0)
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            Chỉnh sửa
                                        </td>
                                        <td>
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            Xóa
                                        </td>
                                        @else
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            <a href="admin/de/sua/{{$v->id}}">Chỉnh sửa</a>
                                        </td>
                                        <td>
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            <a href="admin/de/xoa/{{$v->id}}">Xóa</a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <a class="btn btn-primary btn-lg" href="admin/de/them">
                        <i class="fa fa-fw">&#xf067</i>
                        Tạo đề
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