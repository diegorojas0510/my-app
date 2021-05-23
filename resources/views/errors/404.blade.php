


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Error 404</title>
    <meta name="description" content="Error de página">
    <meta name="author" content="Sena-Lab">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="../css/css_404/base.css">
    <link rel="stylesheet" href="../css/css_404/main.css">
    <link rel="stylesheet" href="../css/css_404/vendor.css">

    <!-- script
   ================================================== -->
   <script src="../js/modernizr.js"></script>

    <!-- favicons
	================================================== -->
    <link rel="icon" type="image/png" href="../assets/img_404/sena.png">

</head>

<body>

    <!-- header 
   ================================================== -->
    <header>
        <div class="row">
            <div class="logo">
                <a href="inicio.blade.php">Sena</a>
            </div>
        </div>

        <a class="menu-toggle" href="#"><span>Menu</span></a>
    </header> <!-- /header -->

    <!-- navigation 
   ================================================== -->
    <nav id="menu-nav-wrap">

        <h5>Menú Principal</h5>
        <ul class="nav-list">
            <li><a href="{{ route('home') }}" title="Inicio">Inicio</a></li>
            <li><a href="{{route('contact')}}" title="contectanos">Contáctenos</a></li>
            <li><a href="#" title="imagenes">Imagenes</a></li>
            <li><a href="{{ route('inisesion')}}" title="inisesion">Iniciar Sesion</a></li>
            <li><a href="#" title="">Blog</a></li>
        </ul>

        <h5>Sena-Lab</h5>  
		<p>¡Hola!, ¿Quieres saber más sobre nuestra APP?, 
			te invito a dar clic en nuestro menú o seguirnos en cualquiera de nuestras redes sociales.
			Qué esperas vamos.</p>
    </nav>

    <!-- main content
   ================================================== -->
    <main id="main-404-content" class="main-content-particle-js">

        <div class="content-wrap">

            <div class="shadow-overlay"></div>

            <div class="main-content">
                <div class="row">
                    <div class="col-twelve">

                        <h1 class="kern-this">404 Error.</h1>
                        <p>
                            ¡Vaya! Parece que no se encontró nada en esta ubicación.
                            ¿Quizás puedes probar uno de los enlaces a continuación,
                            hacer clic en el menú superior o intentar una búsqueda?
                        </p>

                        <div class="search">
                            <form>
                                <input type="text" id="s" name="s" class="search-field" placeholder="Type and hit enter …">
                            </form>
                        </div>

                    </div> <!-- /twelve -->
                </div> <!-- /row -->
            </div> <!-- /main-content -->

            <footer>
                <div class="row">

                    <div class="col-seven tab-full social-links pull-right">
                        <ul>
                            <li><a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/?lang=es" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/?hl=es-la" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://github.com/diegorojas0510/tacticas_de_softwarev2" class="github" target="_blank"><i class="fa fa-github-alt"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-five tab-full bottom-links">
                        <ul class="links">
                            <li><a href="<?php echo ('inicio.blade.php') ?>">Inicio</a></li>
                            <li><a href="imagenes.blade.php">Imágenes</a></li>
                            <li><a href="mailto:darojas6049@misena.edu.co">Contáctenos</a></li>
                        </ul>

                        <div class="credits">
                            <p>Copyright © Sena 2021 V.2 <a href="<?php echo ('inicio.blade.php') ?>" title="styleshout">Página de Inicio</a></p>
                        </div>
                    </div>

                </div> <!-- /row -->
            </footer>

        </div> <!-- /content-wrap -->

    </main> <!-- /main-404-content -->

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
   ================================================== -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>