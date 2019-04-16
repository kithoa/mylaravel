@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Tin Tuyển Dụng</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- hien thi thong bao them thanh cong -->
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            
                            <form action="admin/tuyendung/sua/{{$tuyendung->id}}" method="post" role="form">
                                @csrf
                                 <div class="form-group">
                                    <label>Chọn môn học</label>
                                    <select class="form-control" name="MonHoc">
                                        @foreach($monhoc as $mh)
                                        <option value="{{$mh->id}}"
                                            @if($tuyendung->idMH==$mh->id)
                                                 {{"selected"}}
                                            @endif>{{$mh->TenMH}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <textarea  name="tieude" class="form-control" rows="3">       
                                        {{$tuyendung->TieuDe}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung tin tuyển dụng</label>
                                    <textarea id="demo" name="noidungtd" class="form-control ckeditor" rows="3">
                                        {{$tuyendung->NoiDungTD}}
                                    </textarea >
                                </div>
                                <script type="text/javascript">  
                                CKEDITOR.replace( 'demo' );  
                                </script>
                                <button type="submit" class="btn btn-default"btn-lg" style="background-color:#0000CD ;color:    #FFFAFA"><i class="fa fa-fw">&#xf067</i>Sửa</button>
                                <button type="reset" class="btn btn-default" btn-lg" style="background-color:#0000CD ;color:    #FFFAFA"><i class="fa fa-fw">&#xf067</i>Reset</button>
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