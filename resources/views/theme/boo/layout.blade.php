<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('titulo', 'Control GANADO') | Redes&Reses</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">

    @yield("styles")

    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset("assets/dashboard.css")}}" rel="stylesheet">
</head>

<body>
    <!-- Inicio header -->
    @include("theme/$theme/header")
    <!-- Fin header -->
    <div class="container-fluid">
        <div class="row">
            <!-- Inicio Aside -->
            @include("theme/$theme/aside")
            <!-- Fin Aside -->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">


                <!-- Inicio contenido   -->
                @yield('contenido')
                <!-- Fin contenido   -->

            </main>
        </div>
    </div>


    <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>


    <script src="{{asset("assets/js/jquery-3.5.1.slim.min.js")}}"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
       

    <script src="{{asset("assets/js/bootstrap.bundle.js")}}">
    </script>
    @yield("scriptsPlugins")

    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset("assets/js/scripts.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    @yield("scripts")
</body>

</html>