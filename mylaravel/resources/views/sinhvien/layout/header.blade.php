 <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">TestOnline</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Trang chủ</a></li>
                         <li><a href="thi" class="smoothScroll">Thi</a></li>  
                         <li><a href="#about" class="smoothScroll">Về chúng tôi</a></li> 
                         <li><a href="tuyendung" class="smoothScroll">Tuyển dụng</a></li> 
                         <li><a href="#contact" class="smoothScroll">Liên hệ</a></li>     
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         @if(Auth::check())
                              <li><a href="nguoidung" class="smoothScroll">Chào {{Auth::user()->name}}</a></li>
                              <li><a href="admin/login" class="smoothScroll">TẠO ĐỀ</a></li> 
                              <li><a href="dangxuat" class="smoothScroll">ĐĂNG XUẤT</a></li>
                         @else
                              <li><a href="dangnhap" class="smoothScroll">ĐĂNG NHẬP</a></li>
                              <li><a href="dangky" class="smoothScroll">ĐĂNG KÝ</a></li>
                              <li><a href="#" class="smoothScroll">Chào người lạ!</a></li> 
                         @endif
                    </ul>
               </div>

          </div>
     </section>