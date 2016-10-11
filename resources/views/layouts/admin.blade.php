<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pesquise Já - @yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-4.6.3/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('assets/css/ionicons-2.0.1/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('assets/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-blue-light.min.css') }}">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/all.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }}">
        <!-- Chart -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css')  }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="{{ asset('assets/plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('assets/plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('assets/plugins/amcharts/pie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/amcharts/plugins/dataloader/dataloader.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/amcharts/themes/light.js') }}" type="text/javascript"></script>        


    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            @include('layouts.header')

            @include('layouts.menu')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                @include('layouts.footer')
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="{{asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <!-- iCheck 1.0.1 -->
        <script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('assets/js/demo.js') }}"></script>

        <!-- Import Custom JS -->
        @yield('customJs')

        <script>
$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
});
        </script>
    </body>
</html>
