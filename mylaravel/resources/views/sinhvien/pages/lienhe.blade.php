@extends('sinhvien.layout.index')
@section('content')

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
                                   <input type="text" class="form-control" placeholder="Họ tên  Nội dung " name="name" required="">
                    
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