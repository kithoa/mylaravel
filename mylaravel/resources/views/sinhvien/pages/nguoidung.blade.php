@extends('sinhvien.layout.index')
@section('content')

<!-- CONTACT -->
     <section id="contact" >
          <div class="container">
               <div class="row">
               
                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="nguoidung/{{Auth::user()->id}}" method="post" >
                               @csrf
                              <div class="section-title" style="text-align: center;">
                                   <h2 >Thông tin tài khoản</h2>
                              </div>
                              <!-- hien thi thong bao loi -->
                               @if($errors->any())
                               <div class="section-title" style="text-align: center;">
                                   @foreach($errors->all() as $err)
                                       <p>{{$err}}</p>
                                   @endforeach
                               </div>
                               @endif
                              <div class="col-md-12 col-sm-12" style="margin-left: 55%;width:80%" >
                                   <input type="text" class="form-control" placeholder="Tên đăng nhập " name="tenTK" value="{{Auth::user()->name}}"/>
                    
                                   <input type="email" class="form-control" placeholder="Email" name="email"   value="{{Auth::user()->email}}"/>
                                  <input type="password" name="matKhau" class="form-control" placeholder="Mật khẩu">
                                  <input type="password" name="re-matkhau" class="form-control" placeholder="Nhập lại mật khẩu"/>
                              </div>
                              <div class="col-md-4 col-sm-12" style="margin-left:80%">
                                   <input  type="submit" class="form-control" name="gui" value="Sửa" />
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>  
@endsection