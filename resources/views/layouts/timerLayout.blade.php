<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Mattar & Asociados</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="timer/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="timer/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="timer/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="timer/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="timer/css/owl.carousel.css">
        <link rel="stylesheet" href="timer/css/owl.theme.css">
        <link rel="stylesheet" href="timer/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="timer/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="timer/css/responsive.css">

        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="timer/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="timer/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="timer/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="timer/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="timer/js/slider.js"></script>
        <script src="timer/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="timer/js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="/">
                            <img src="timer/images/logomya.png" alt="" >
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li>
                                <a href="{{route('home')}}">Inicio</a>  es para que no sea necesario cambiar la navegacion si cambiamos la url-->
                            <!-- que se vea solo si esta logeado-->
                            @if(auth()->check())
                                <li><a href="{{route('home')}}">Inicio</a></li>
                                <li><a href="{{route('about')}}">Nosotros</a></li>
                                <li><a href="{{route('service')}}">Servicios</a></li>
                                <li><a href="{{route('contact')}}">Contacto</a></li>
                                <li><a href="{{route('adini')}}">Adminstración</a></li>
                            @else
                                <li><a href="/">Inicio</a></li>
                                <li><a href="{{route('about')}}">Nosotros</a></li>
                                <li><a href="{{route('service')}}">Servicios</a></li>
                                <li><a href="{{route('contact')}}">Contacto</a></li>
                                <li><a href="{{route('home')}}">Login</a></li>
                            @endif

                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

<!-- directiva de blade que sirve para definir un espacio donde las demas vistas van a poder poner su contenido unico -->
@yield('contenido')

            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2017</span> . Diseñado y Desarrollado por Elliot Ide </a></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <!--<ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </footer> <!-- /#footer -->

        </body>
    </html>
