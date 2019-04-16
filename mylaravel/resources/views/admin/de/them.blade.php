@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tạo đề thi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
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
                    <form action="admin/de/them" method="post" role="form">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Chọn môn học</label>
                                <select id="maMH" name="maMH" class="form-control">
                                    @foreach($monhoc as $mh)
                                    <option value="{{$mh->id}}">{{$mh->TenMH}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên đề thi</label>
                                <input name="tenDe" class="form-control" placeholder="Nhập tên đề">
                            </div>
                        </div>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Nội dung câu hỏi</th>
                                        <th>Thang điểm</th>
                                        <th>Giảng viên</th>
                                        <th>Check</th>                                    
                                    </tr>
                                </thead>
                                <tbody id="dsch">
                                    @foreach ($cauhoi as $ch)
                                    <tr class="odd gradeX">
                                        <td>{{$ch->id}}</td>
                                        <td>{{$ch->NoiDungCH}}</td>
                                        <td>{{$ch->ThangDiem}}</td>
                                        <td>{{$ch->giangvien->TenGV}}</td>
                                        <td align="center"><input type="checkbox" name="ch[]" value="{{$ch->id}}"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-default">Tạo đề</button>
                        </div>
                        <!-- /.table-responsive -->
                    </form>
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

@section('script')
    <script>
        $(document).ready(function() {
            $("#maMH").change(function(){
                var idMonHoc = $(this).val();
                $.get("admin/ajax/cauhoi/"+idMonHoc, function(data){
                    $("#dsch").html(data);
                });     
            });
        });
    </script>
@endsection