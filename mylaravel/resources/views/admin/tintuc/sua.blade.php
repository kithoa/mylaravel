@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Tin Tức</h1>
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
                            
                            <form action="admin/tintuc/sua/{{$tintuc->id}}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <textarea  name="thangdiem" class="form-control" rows="3">       
                                        {{$tintuc->TieuDe}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung tin tức</label>
                                    <textarea id="demo" name="noidungtt" class="form-control ckeditor" rows="3">
                                        {{$tintuc->NoiDungTT}}
                                    </textarea >
                                </div>
                                 <div class="form-group">
                                    <label>Hình ảnh </label>
                                    <p>
                                    <img with="400px" src="backend/image/{{$tintuc->Hinh}}"></p>
                                    <input id="demo" type="file" name="Hinh" class="form-control"/>
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