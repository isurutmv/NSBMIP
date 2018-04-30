<html lang="en" class="gr__getbootstrap_com">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', "Library Management System")</title>
    <meta name="description" content="Library Management System">
    <meta name="author" content="Isuru Udayanga">

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
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/browser.css">
</head>

<body data-gr-c-s-loaded="true">
@include('browser/templates/navbar')
<div class="container">

    <!-- Static navbar -->

    @section('content')
    @show

</div> <!-- /container -->

    @include('browser/templates/footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.js"></script>


        <script src="{{ URL::to('/') }}/vendor/vendor.bundle.min.js" type="application/javascript"></script>
        <script src="{{ URL::to('/') }}/vendor/bundle.min.js" type="application/javascript"></script>
        <script src="{{ URL::to('/') }}/vendor/bundle.js" type="application/javascript"></script>
        <script src="{{ URL::to('/') }}/vendor/bootstrap3-typeahead.min.js" type=application/javascript"></script>
        <script src="{{ URL::to('/') }}/vendor/bootstrap3-typeahead.js" type=application/javascript"></script>
        <script language="JavaScript" type="text/javascript" src="{{ URL::to('/') }}/vendor/book-borrow.js"></script>

</body>
</html>