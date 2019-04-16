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
                    Tài khoản
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
                                    <th>Mã tài khoản</th>
                                    <th>Tên tài khoản</th>
                                    <th>Email</th>
                                    <th>Phân quyền</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($taikhoan as $tk)
                                    <tr class="odd gradeX">
                                        <td>{{$tk->id}}</td>
                                        <td>{{$tk->name}}</td>
                                        <td>{{$tk->email}}</td>
                                        @if($tk->PhanQuyen == 0)
                                            <td>Admin</td>
                                        @endif
                                        @if($tk->PhanQuyen == 1)
                                            <td>Giảng viên</td>
                                        @endif
                                        @if($tk->PhanQuyen == 2)
                                          <td>Sinh viên</td>
                                        @endif
                                        <td>
                                            <i class="fa fa-fw">&#xf040</i>
                                            <a href="admin/taikhoan/sua/{{$tk->id}}">Chỉnh sửa</a>
                                        </td>
                                        <td>
                                            <i class="fa fa-fw">&#xf1f8</i>
                                            <a href="admin/taikhoan/xoa/{{$tk->id}}">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <a class="btn btn-primary btn-lg" href="admin/taikhoan/them">
                        <i class="fa fa-fw">&#xf234</i>
                        Thêm tài khoản
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