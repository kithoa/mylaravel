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
                  Tin Tức
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
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung tuyển dụng</th>
                                    <th>Môn Học</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tuyendung as $td)
                                    <tr class="odd gradeX">
                                        <td>{{$td->id}}</td>
                                        <td>{{$td->TieuDe}}</td>
                                        <td>{{$td->NoiDungTD}}</td>
                                        <td>{{$td->monhoc->TenMH}}</td>
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            <a href="admin/tuyendung/sua/{{$td->id}}">Sửa</a>
                                        </td>
                                        <td>
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            <a href="admin/tuyendung/xoa/{{$td->id}}">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <a class="btn btn-primary btn-lg" href="admin/tuyendung/them">
                        <i class="fa fa-fw">&#xf067</i>
                        Tạo tuyển dụng
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