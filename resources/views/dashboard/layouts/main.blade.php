<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Blog</title>




    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    {{-- <script src="js/jQuery.js"></script> --}}
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/login_regis.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>



    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <script src="/dashboard.js"></script>

</head>

<body>

    @include('dashboard.layouts.header')
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layouts.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')

            </main>
        </div>
    </div>



    <script>
        feather.replace()
    </script>
</body>

</html>
