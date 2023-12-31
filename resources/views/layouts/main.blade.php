<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common-css\bootstrap.css">
    <!-- <link href="{{ url('assets/common-css/bootstrap.css') }}" rel="stylesheet"> -->
    <link href="{{ url('assets/common-css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/common-css/layerslider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/common-css/sty.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    {{-- <script src="js/jQuery.js"></script> --}}
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/login_regis.js"></script>
    {{-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- icon bootstap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}


    {{-- //js --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script> --}}


    <link rel="stylesheet" href="/css/sign-in.css">
    <title>Latihan Blog | {{ $title }}</title>
</head>

<body>
    @include('partials.navbar')

    <div class="container mt-5">
        @yield('headers')
    </div>

</body>

</html>
