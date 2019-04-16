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
                    Kết quả thi
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Mã kết quả</th>
                                    <th>Tên đề</th>
                                    <th>Điểm</th>
                                    <th>Xếp loại</th>
                                    <th>Môn học</th>
                                    <th>Giảng viên ra đề</th>                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ketqua as $v)
                                    <tr class="odd gradeX">
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->de->TenDe}}</td>
                                        <td>{{$v->Diem}}</td>
                                        <td>{{$v->XepLoai}}</td>
                                        <td>{{$v->de->monhoc->TenMH}}</td>
                                        <td>{{$v->de->giangvien->TenGV}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
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