<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema website UI</title>

    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link type="text/css" href="{{url('css/style.css')}}" media="all" rel="stylesheet" />


</head>
<body>
<!-- Content -->
<div class="content-auth">
    @yield('content')
</div>
<!-- /#content -->




<script src="js/app.js" charset="utf-8"></script>

<!--Jquery -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>


@yield('scripts')

</body>
</html>
