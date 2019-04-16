<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ngân hàng câu hỏi</title>
        <!-- khai bao duong dan mac dinh -->
        <base href="{{asset('')}}">
        <!-- Bootstrap Core CSS -->
        <link href="backend/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="backend/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="backend/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="backend/css/dataTables/dataTables.responsive.css" rel="stylesheet">

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

        <div id="wrapper">

            <!-- Navigation -->
            @include('admin.layout.header')

            @yield('content')
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="backend/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="backend/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="backend/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="backend/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="backend/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="backend/js/startmin.js"></script>

        <script type="text/javascript" language="javascript" src="backend/ckeditor/ckeditor.js" ></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

        @yield('script')

    </body>
</html>
