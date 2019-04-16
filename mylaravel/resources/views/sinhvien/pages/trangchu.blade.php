@extends('sinhvien.layout.index')
@section('content')
<!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Chào Mừng Đến Với Website Tạo Đề Và Thi Trắc Nghiệm Online!</h1>
                                        <h3>Chúng tôi mang đến cho bạn những trải nghiệm về chia sẻ và đánh giá kiến thức tuyệt vời nhất.</h3>
                                        <a href="gioithieu" class="section-btn btn btn-default smoothScroll">GIỚI THIỆU</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Hãy tham gia vào website nganhangcauhoi.tk!</h1>
                                        <h3>Để cùng chia sẻ và kiểm tra kiến thức của bạn.</h3>
                                        <a href="huongdan" class="section-btn btn btn-default smoothScroll">HƯỚNG DẪN</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Hãy liên hệ với chúng tôi!</h1>
                                        <h3>Để giải đáp bất kì thắc mắc của các bạn. </h3> 
                                        <a href="lienhe" class="section-btn btn btn-default smoothScroll">LIÊN HỆ</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
<!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Tại sao bạn nên tham gia vào <a href="#">nganhangcauhoi.tk</a></h2>	
                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Vượt trội về tính năng</h3>
                                        <p>Giúp cho giảng viên tạo đề thi trắc nghiệm (nội dung đề thi trong một số nhóm kiến thức như chương, bài).</p>  
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

                     <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="frontend/images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>

<!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Kho tàng kiến thức</h3>
                              <p>Tập hợp những kiến thức từ nhiều chuyên gia trong các lĩnh vực khác nhau</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Giao lưu học hỏi</h3>
                              <p>Chia sẻ nhiều đề thi mẫu giúp cho bạn kiểm tra và nâng cao kiến thức của mình.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Đánh giá bản thân</h3>
                              <p>Kiểm tra kiến thức nhanh chóng và xem kết qủa chính xác</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>

<!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Tin tuyển dụng <small>Cơ hội việc làm trong tầm tay</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="frontend/images/courses-image1.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Social Media Management</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="frontend/images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 25</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="frontend/images/courses-image2.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Graphic & Web Design</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="frontend/images/author-image2.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 80</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="frontend/images/courses-image3.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Marketing Communication</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="frontend/images/author-image3.jpg" class="img-responsive" alt="">
                                                       <span>Catherine</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="frontend/images/courses-image4.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Summer Kids</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="frontend/images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 45</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="frontend/images/courses-image5.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Business &amp; Management</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="frontend/images/author-image2.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>

<!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Liên hệ chúng tôi</h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Họ tên " name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Email" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder=" Nội dung" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="gui" value="Gửi">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="frontend/images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>
	
@endsection