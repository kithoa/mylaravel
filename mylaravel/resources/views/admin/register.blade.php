<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin-NHCH</title>
        <!-- khai bao duong dan mac dinh -->
        <base href="{{asset('')}}">
        <!-- Bootstrap Core CSS -->
        <link href="backend/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="backend/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="backend/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="backend/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đăng ký </h3>
                        </div>
                         <!-- hien thi thong bao them thanh cong -->
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                        <div class="panel-body">
                            <form action="register" method="post" role="form">
                                <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> -->
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="tên đăng nhập" name="tenTK" type="text"   autofocus>
                                    </div>
									<div class="form-group">
                                        <input class="form-control" placeholder="email" name="email" type="email" >
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="mật khẩu" name="matkhau" type="password">
                                    </div>                                  
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Đăng ký</button>
                                    <div class="form-group" style="text-align: right;margin-top: 10px ">
                                      Đã có tài khoản?<a href="admin/login"> Đăng nhập</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="backend/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="backend/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="backend/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="backend/js/startmin.js"></script>

    </body>
</html>
