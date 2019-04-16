@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kết quả thi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Tên sinh vên
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6"> 
                            <div class="panel-body">
                                <p>
                                    Số câu đúng : {{$ketqua->SoCauDung}} <br>
                                    Số câu sai : {{$ketqua->SoCauSai}} <br>
                                    Điểm : {{$ketqua->Diem}}/{{$td}} <br>
                                    Xếp loại : {{$ketqua->XepLoai}} <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.col-lg-4 -->
    </div>
</div>
<!-- /#page-wrapper -->
@endsection