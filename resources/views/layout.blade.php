<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Proyecto Sena</title>
    
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/sena.png') }}"/>
    {{--  <!-- Font Awesome icons (free version)-->  --}}
    <script type="text/javascript"  src="{{ asset('https://use.fontawesome.com/releases/v5.15.1/js/all.js') }}" crossorigin="anonymous"></script>
    {{--  <!--Estilos de w3schools-->  --}}
    <link href="{{ asset('https://www.w3schools.com/w3css/4/w3.css') }}" rel="stylesheet" />
    {{--  <!-- Google fonts-->  --}}
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Varela+Round') }}" rel="stylesheet" />
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet" />
    {{--  <!-- Core theme CSS (includes Bootstrap)-->  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--  script para la actualización de la página  --}}
    <script type="text/javascript" src="{{ asset('js/hora.js') }}"></script>

</head>
{{--  <!--======================================
Whatsapp
======================================-->  --}}
<div class="btn-whatsapp">
    <a href="{{ asset('https://api.whatsapp.com/send?phone=31000000001') }}" target="_blank">
        <img src="{{ asset('assets/img/whatsapp.png') }}" alt="whatsapp" style="border-radius: 10px; width: 60px;">
    </a>
</div>

<body id="page-top">

    {{--  <!--======================================
    Barra de navegación
    ======================================-->  --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('home') }}">Proyecto Sena</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('nosotros')}}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('contact')}}">Contáctenos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('inisesion')}}">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')


    

{{--  <!--======================================
    Sección de contacto.
    ======================================-->  --}}
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div>
                            <iframe src="{{ asset('https://www.google.com/maps/d/u/0/embed?mid=11x42Djzw0Xq1MU_1GK5qd64BQZBqbHbB') }}"
                                width="100%" height="200px" style="border:0;" allowfullscreen="0"
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a
                                    href="mailto:darojas6049@misena.edu.co">darojas6049@misena.edu.co</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+57 (312) 111 01 02 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="redes-container social d-flex justify-content-center">
                <ul>
                    <li><a href="https://www.facebook.com/" class="facebook" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/?lang=es" class="twitter" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/" class="youtube" target="_blank"><i
                                class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/?hl=es-la" class="instagram" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/feed/" class="linkedin" target="_blank"><i
                                class="fab fa-linkedin"></i></a></li>
                    {{--  <!--li><a href="#" class="shopping-cart"><i class="fas fa-shopping-cart"></i></a></li-->  --}}
                    <li><a href="https://github.com/diegorojas0510/tacticas_de_softwarev2" class="github"
                            target="_blank"><i class="fab fa-github-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    {{--  <!-- Footer-->  --}}
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Sena 2021 V.2</div>
        {{--  <!--======================================
        Actualización de Sitio Web Para Auditoria
        ======================================-->  --}}
        <script>document.write("Ultima actualización " + day); document.write(myweekday + " de " + month + "");</script>
    </footer>
    {{--  <!-- Bootstrap core JS-->  --}}
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    {{--  <!-- Third party plugin JS-->  --}}
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js') }}"></script>
    {{--  <!-- Core theme JS-->  --}}
   
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
@yield('footer')

{{--  
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Timer Agency Template</title>
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
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- slick slider -->
        <link rel="stylesheet" href="plugins/slick/slick.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!-- hover -->
        <link rel="stylesheet" href="plugins/hover/hover-min.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

<!--
        ==================================================
        Header Section Start
        ================================================== -->
<section class="top-bar animated-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="../images/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.html">Service</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="gallery.html">Gallery</a>
                                    <a class="dropdown-item" href="single-post.html">Single Post</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog-fullwidth.html">Blog Full</a>
                                    <a class="dropdown-item" href="blog-left-sidebar.html">Blog Left sidebar</a>
                                    <a class="dropdown-item" href="blog-right-sidebar.html">Blog Right sidebar</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

        
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="row content-justify-between">
                        <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
                            <p class="copyright">Copyright: Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                                Get More Bootstrap Template From Our 
                                <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Store</a>
                            </p>
                        </div>
                        <div class="col-md-4 col-12">
                            <!-- Social Media -->
                            <ul class="social text-center text-md-right text-lg-right">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="plugins/jQurey/jquery.min.js"></script>
	<!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
	<!-- slick slider -->
	<script src="plugins/slick/slick.min.js"></script>
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="plugins/facncybox/jquery.fancybox.js"></script>
	<!-- template main js -->
	<script src="js/main.js"></script>
 	</body>
</html>
@yield('timer')  --}}

    