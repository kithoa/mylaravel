@extends('sinhvien.layout.index')
@section('content')
<section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Hãy nhanh tay đăng ký để tham gia vào nganhangcauhoi.tk để trải nghiệm nhiều điều thú vị.</h2>

                               <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Vượt trội về tính năng</h3>
                                        <p>Giúp cho giảng viên tạo đề thi trắc nghiệm( nội dung đề thi trong một số nhóm kiến thức như chương, bài ).</p>  
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>Chia sẻ kiến thức nhanh chóng!</h3>
                                       <p> Bạn chia sẻ kiến nhanh chóng. Ngân hàng đề thi phong phú và đa dạng.</p> 
                                   </figcaption>
                              </figure>

                              <figure>
                                    <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Đánh giá bản thân khách quan!</h3>
                                        <p>Bạn sẽ được trải nghiệm tuyệt vời khi kiểm tra kiến thức trực tuyến.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="dangky" method="post" role="form">
                                    @csrf
                                   <h2>Đăng ký</h2>
                                   @if(Session::has('thongbao'))
                                        <h4 style="color:red">{{Session::get('thongbao') }}</h4>
                                   @endif
                                   <input type="text" name="tenTK" class="form-control" placeholder="Tên đăng nhập" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Email" required="">

                                   <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu" required="">
                                   <input type="password" name="re-matkhau" class="form-control" placeholder="Nhập lại mật khẩu" required="">
                                   <button class="submit-btn form-control" id="form-submit">Đăng ký</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

@endsection