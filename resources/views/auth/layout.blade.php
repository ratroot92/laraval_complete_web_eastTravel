<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="{{asset('theme/admin')}}/images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{asset('theme/admin')}}/css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{asset('theme/admin')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('theme/admin')}}/css/mob.css">
    <link rel="stylesheet" href="{{asset('theme/admin')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('theme/admin')}}/css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="{{asset('theme/admin')}}js/html5shiv.js"></script>
    <script src="{{asset('theme/admin')}}js/respond.min.js"></script>

</head>


<body>

    @yield('content')
    <!-- Jquery Core Js -->

    <!--======== SCRIPT FILES =========-->
    <script src="{{asset('theme/admin')}}/js/jquery.min.js"></script>
    <script src="{{asset('theme/admin')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('theme/admin')}}/js/materialize.min.js"></script>
    <script src="{{asset('theme/admin')}}/js/custom.js"></script>
</body>

</html>