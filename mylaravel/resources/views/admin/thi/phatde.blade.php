@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$d->TenDe}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">                            
                            <form action="admin/thi/phatde/{{$d->id}}" method="post" role="form">
                                @csrf
                                @foreach($ch as $k => $v)
                                	<div class="form-group">
	                                    <label>Câu hỏi {{$k + 1}}: {{$v->NoiDungCH}}</label>
		                                @foreach($v->dapan as $da)		                                
		                                	<div class="radio">
			                                    <label class="radio">
			                                    	<input type="radio" name="da[{{$k}}]" value="{{$da->id}}">{{$da->NoiDungDA}}
				                                </label>
			                                </div>
		                                @endforeach
	                                </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">Nộp bài</button>
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