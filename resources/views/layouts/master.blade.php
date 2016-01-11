<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Management System | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href={{ URL::asset('bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href={{ URL::asset('dist/css/AdminLTE.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('dist/css/skins/_all-skins.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/iCheck/flat/blue.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/iCheck/square/blue.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/morris/morris.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/datepicker/datepicker3.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/daterangepicker/daterangepicker-bs3.css')}}>
    <link rel="stylesheet" href={{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
    <body class="hold-transition skin-blue sidebar-mini">
        <script src={{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js')}}></script>
        <script ssrc={{ URL::asset('plugins/iCheck/icheck.min.js')}}></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>$.widget.bridge('uibutton', $.ui.button);</script>
        <script src={{ URL::asset('bootstrap/js/bootstrap.min.js')}}></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src={{ URL::asset('plugins/morris/morris.min.js')}}></script>
        <script src={{ URL::asset('plugins/sparkline/jquery.sparkline.min.js')}}></script>
        <script src={{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
        <script src={{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
        <script src={{ URL::asset('plugins/knob/jquery.knob.js')}}></script>
        <script src={{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}></script>
        <script src={{ URL::asset('plugins/daterangepicker/daterangepicker.js')}}></script>
        <script src={{ URL::asset('plugins/timepicker/bootstrap-timepicker.min.js')}}></script>
        <script src={{ URL::asset('plugins/datepicker/bootstrap-datepicker.js')}}></script>
        <script src={{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}></script>
        <script src={{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}></script>
        <script src={{ URL::asset('plugins/fastclick/fastclick.min.js')}}></script>
        <script src={{ URL::asset('dist/js/app.min.js')}}></script>
        <script src={{ URL::asset('dist/js/pages/dashboard.js')}}></script>
        <script src={{ URL::asset('dist/js/demo.js')}}></script>


    @yield('content')

    </body>
</html>
