@extends('sinhvien.layout.index')
@section('content')
<!-- FEATURE -->
 <section id="feature">
      <div class="container">
           <div class="row">
           		@foreach($de as $k => $v)
                <div class="col-md-4 col-sm-4" style="margin-bottom: 10px">
                     <div class="feature-thumb">
                          <span>{{$k+1}}</span>
                          <h3>{{$v->TenDe}}</h3>
                          <h3>Môn học {{$v->monhoc->TenMH}}</h3>
                          <p>
                          	Giảng viên ra đề {{$v->giangvien->TenGV}} <br>
                          	<br>
                            <a href="phatde/{{$v->id}}" class="section-btn btn btn-default smoothScroll" style="background:green">Bắt đầu thi</a>
                          </p>
                     </div>
                </div>
                @endforeach
           </div>
      </div>
 </section>
@endsection