<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common-css\bootstrap.css">
    <!-- <link href="{{url('assets/common-css/bootstrap.css')}}" rel="stylesheet"> -->
    <link href="{{url('assets/common-css/ionicons.css')}}" rel="stylesheet">
    <link href="{{url('assets/common-css/layerslider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="common-css/sty.css">
    {{-- <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script> --}}
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Latihan Blog | {{$title}}</title>
</head>
<body>
  @include('partials.navbar')

<div class="container mt-5">
    @yield('headers')
</div>

</body>
</html>