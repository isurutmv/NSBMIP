<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', "LMS")</title>
    <meta name="description" content="Library Management System">
    <meta name="author" content="Isuru Udayanga">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    @if(getenv('APP_ENV')=='local')
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/bootstrap-datepicker/bootstrap-datepicker3.min.css">

    @else
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
              integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw=="
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.css">
    @endif

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/app/custom.css">

</head>
@if (Auth::guest())
<body class="login-page">
    @section('login-content')
    @show
</body>
@else

    <body class="skin-blue sidebar-mini">
    <div class="wrapper">
        @include('admin.templates.header')
        @include('admin.templates.left-sidebar')
        <div class="content-wrapper">
            @section('content')

            @show
                <div id='tawk_59dd97b6c28eca75e462555a'></div>
                <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); Tawk_API.embedded='tawk_59dd97b6c28eca75e462555a';
                    (function(){
                        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                        s1.async=true;
                        s1.src='https://embed.tawk.to/59dd97b6c28eca75e462555a/1ccak4nim';
                        s1.charset='UTF-8';
                        s1.setAttribute('crossorigin','*');
                        s0.parentNode.insertBefore(s1,s0);})();
                </script>
                <!--End of Tawk.to Script-->

        </div>
        @include('admin.templates.footer')
    </div>
@endif

<!-- JS SCRIPTS -->

    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
            integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
            crossorigin="anonymous"></script>
    <script src="{{ URL::to('/') }}/vendor/vendor.bundle.min.js" type="application/javascript"></script>
    <script src="{{ URL::to('/') }}/vendor/bundle.min.js" type="application/javascript"></script>
    <script src="{{ URL::to('/') }}/vendor/adminlte.min.js" type="application/javascript"></script>
    <script src="{{ URL::to('/') }}/vendor/adminlte.js" type="application/javascript"></script>
    <script src="{{ URL::to('/') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>


</body>
</html>