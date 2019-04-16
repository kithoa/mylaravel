@extends('sinhvien.layout.index')
@section('content')
<section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Cám ơn đã tin tưởng và sử dụng web của chúng tôi</h2>

                               <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Yêu bạn</h3>
                                        <p>Giúp cho giảng viên tạo đề thi trắc nghiệm( nội dung đề thi trong một số nhóm kiến thức như chương, bài ).</p>  
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>Thương bạn</h3>
                                       <p> Bạn chia sẻ kiến nhanh chóng. Ngân hàng đề thi phong phú và đa dạng.</p> 
                                   </figcaption>
                              </figure>

                              <figure>
                                    <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Cưng bạn</h3>
                                        <p>Bạn sẽ được trải nghiệm tuyệt vời khi kiểm tra kiến thức trực tuyến.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="dangky" method="post" role="form">                                    
                                   <h2>Kết quả thi</h2> <br>
                                   <h2>Số câu đúng : {{$ketqua->SoCauDung}}</h2>
                                   <h2>Số câu sai : {{$ketqua->SoCauSai}}</h2>
                                   <h2>Điểm : {{$ketqua->Diem}}/{{$td}}</h2>                                    
                                   <h2>Xếp loại : {{$ketqua->XepLoai}}</h2>                                    
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

@endsection

