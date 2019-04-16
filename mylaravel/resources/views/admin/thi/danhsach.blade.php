@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách đề thi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        @foreach($de as $d)
            <div class="col-lg-4">
	            <div class="panel panel-info">
	                <div class="panel-heading">
	                    {{$d->TenDe}} - Môn học {{$d->monhoc->TenMH}}
	                </div>
	                <div class="panel-body">
	                    <p>
	                    	<button type="button" class="btn btn-outline btn-info">
	                    		<a href="admin/thi/phatde/{{$d->id}}"><i class="fa fa-fw">&#xf0a4</i> Bắt đầu thi</a>     
	                    	</button>
	                    </p>
	                </div>
	                <div class="panel-footer">
	                    Người ra đề {{$d->giangvien->TenGV}}
	                </div>
	            </div>
            </div>
        @endforeach
        <!-- /.col-lg-4 -->
    </div>
</div>
<!-- /#page-wrapper -->
@endsection