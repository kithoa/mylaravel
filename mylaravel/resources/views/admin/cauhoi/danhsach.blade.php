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
                    Câu Hỏi 
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
                                    <th>Nội dung câu hỏi</th>
                                    <th>Thang điểm</th>
                                    <th>Chương</th>
                                    <th>Môn Học</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cauhoi as $ch)
                                    <tr class="odd gradeX">
                                        <td>{{$ch->id}}</td>
                                        <td>{{$ch->NoiDungCH}}</td>
                                        <td>{{$ch->ThangDiem}}</td>
                                        <td>{{$ch->chuong->TenChuong}}</td>
                                        <td>{{$ch->monhoc->TenMH}}</td>
                                        @if(count($ch->de)>0)
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            Sửa
                                        </td>
                                        <td>
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            Xóa
                                        </td>
                                        @else
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            <a href="admin/cauhoi/sua/{{$ch->id}}">Sửa</a>
                                        </td>
                                        <td>
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            <a href="admin/cauhoi/xoa/{{$ch->id}}">Xóa</a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <a class="btn btn-primary btn-lg" href="admin/cauhoi/them">
                        <i class="fa fa-fw">&#xf067</i>
                        Tạo câu hỏi
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