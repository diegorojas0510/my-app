@extends('layout')


@section('content')

{{--  <?php 
require_once('layout.blade.php');
?>      --}}
   
   <!--======================================
   Sección principal-Inicio
   ======================================-->
   <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Atributos de Calidad</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Propiedad medible del sistema que también satisface cada una
                    de las partes interesadas</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#inicio">Iniciar</a>
            </div>
        </div>
    </header>
    <!-- inicio-->
    <section class="inicio-section text-center" id="inicio">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Tácticas mas implementadas en el mundo</h2>
                    <p class="text-white-50">
                        En la arquitectura de software actualmente se incluyen varios tipos de
                        <a href="https://www.youtube.com/watch?v=NmRuhzyKCWM&list=RDCMUCs5ccxrTx9k8DN9YXnHm5AQ&start_radio=1&t=416s"
                            target="_blank">atributos de calidad</a>
                        . Los cuales nos ayudaran a ser más eficientes al momento de diseñar y maquetar un sitio web,
                        para ello se debe conocer que hace un estimulo en el sistema y quien lo ocasiona acompáñenos.
                    </p>
                </div>
            </div>
            <a class="btn btn-primary js-scroll-trigger" href="#projects">Tácticas</a>
            <img class="img-fluid" src="../assets/img/ipad.png" alt="ipad" />
        </div>
    </section>
    <!--======================================
    Sección de proyectos
    ======================================-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- Fila de proyectos destacados-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <!--div class="col-xl-8 col-lg-7">
                        <img class="img-fluid mb-3 mb-lg-0" src="assets/img/seguridad1.jpg" alt="seguridad1" />
                    </div-->
                <div id="carouselExampleIndicators" class="carousel slide col-xl-8 col-lg-7" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/seguridad1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/seguridad2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/seguridad3.jpeg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Atras</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Seguridad</h4>
                        <p class="text-black-50 mb-0" style="text-align: justify;">La seguridad es la capacidad que
                            tienen los sistemas informáticos
                            de hacer la validación,
                            cuando alguien accede a un sistema de información con la intención de hacer daño se denomina
                            ataque, y la fuente de estímulo puede ser un humano u otro sistema,
                            para esto podemos basarnos en lás caracteristicas de la seguridada son tres: la integridad,
                            la confidencialidad, la disponibilidad <a
                                href="#"
                                target="_blank">(Conocer más)</a>
                            se recomienda para que la app no sea vulnerada en su totalidad, debe estar construida en
                            capas. </p><br>
                        <!--======================================
                         Modal de Seguridad
                        ======================================-->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter">
                            Saber más
                        </button>

                      <!--======================================
                      Modal de Seguridad
                      ======================================-->
                        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="ModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLongTitle">Táctica de Seguridad</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="text-align: justify;">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quod aliquam blanditiis consequatur ab asperiores corrupti, fugit provident ipsum numquam, non consectetur vel repudiandae cum inventore atque at cupiditate sed!

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hasta Aquí-->
            <!--======================================
             Sección de Interoperabilidad
            ======================================-->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6"><img class="img-fluid" src="../assets/img/iphone2.jpg" alt="" /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Interoperabilidad</h4>
                                <p class="mb-0 text-white-50">Responsable del funcionamiento y la transmisión de datos y
                                    su intercambio con otros sistemas externos. Un sistema bien diseñado facilita la
                                    integración con sistemas de terceros.
                                </p>
                                <hr class="d-none d-lg-block mb-0 ml-0" /><br>
                                <!--======================================
                                 Modal para Interoperabilidad
                                ======================================-->
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal">
                                    Ver Más
                                </button>
                                <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog"
                                    aria-labelledby="tituloVentana" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 id="tituloVentana">Interoperabilidad</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!--div class="alert alert-success"-->
                                                <div class="modal-body" style="text-align: justify;">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error omnis deserunt recusandae, aperiam voluptatum esse, praesentium, eius quia doloremque impedit ducimus ratione tenetur harum eaque suscipit. Minus officia similique tempora.

                                                </div>
                                                <!--/div-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" data-dismiss="modal">
                                                    Cerrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Hasta aquí-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--======================================
            Sección de Usabilidad
            ======================================-->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6">
                    <img class="img-fluid" src="../assets/img/iphone.jpg" alt="iphone" />
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Usabilidad</h4>
                                <p class="mb-0 text-white-50" style="text-align: justify;">
                                    Es la capacidad que tiene nuesto software en poder cambiar con el tiempo, soportar
                                    aumentos de cargas pero sin disminuir el rendimiento,
                                    se recomienda que los sistemas de hoy en día, sean construidos en la arquitectura de
                                    diseño por capas
                                </p>
                                <hr class="d-none d-lg-block mb-0 mr-0" /><br>
                                <!--======================================
                                Usabilidad-MODAL
                                ======================================-->
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal2">
                                    Abrir
                                </button>

                                <div class="modal fade" id="ventanaModal2" tabindex="-1" role="dialog"
                                    aria-labelledby="tituloVentana" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 id="tituloVentana">Usabilidad</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!--div class="alert alert-success"-->
                                                <div class="modal-body" style="text-align: justify;">
                                                    <b>Táctica de Usabilidad:</b>

                                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ut illum earum ipsum, vitae quaerat soluta harum excepturi rem sunt cum perferendis, voluptates provident. Alias tempora aliquid laborum illo cum!
                                                </div>
                                                <!--/div-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" data-dismiss="modal">
                                                    Cerrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Hasta aquí-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <!--======================================
        Sección de OTRAS TÁCTICAS DE SOFTWARE
        ======================================-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Otras Tácticas de Software</h2>

                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-mobile-alt text-primary mb-4"></i>
                            <h3 class="h4 mb-2"><a href="assets/documentos/Otros atributos de calidad.pdf"
                                    target="_blank">Otras Tácticas</a></h3>
                            <p class="text-muted mb-0"></p><br>
                            <!--======================================
                                Botón de Otros
                            ======================================-->
                            <a class="btn btn-primary js-scroll-trigger" href="imagenes.blade.php"
                                type="submit">Imágenes</a>
                            <!--Hasta aquí-->
                        </div>
                    </div>
                    <!--======================================
                    Sección de Disponibilidad
                    ======================================-->
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2"><a href="assets/documentos/Disponibilidad.pdf"
                                    target="_blank">Disponibilidad</a></h3>
                            <p class="text-muted mb-0">
                                <!--h6 class="modal-title" id="exampleModalLongTitle">(Ver más…)</h6-->
                            </p><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal4">
                                    Abrir
                                </button></a>

                            <div class="modal fade" id="ventanaModal4" tabindex="-1" role="dialog"
                                aria-labelledby="tituloVentana" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="tituloVentana">Disponibilidad</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!--div class="alert alert-success"-->
                                            <div class="modal-body" style="text-align: justify;">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quae soluta perferendis laboriosam ipsum recusandae consequatur! Aspernatur rerum neque soluta ex vel veniam quas accusantium, ducimus quasi. Id, commodi hic!

                                            </div>
                                            <!--/div-->
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" data-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Hasta aquí-->
                        </div>
                    </div>
                    <!--======================================
                    Sección de Rendimiento
                    ======================================-->
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2"><a href="assets/documentos/Rendimiento.pdf"
                                    target="_blank">Rendimiento</a></h3>
                            <p class="text-muted mb-0">
                            </p><br>
                            <!--======================================
                             Rendimiento-MODAL
                            ======================================-->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal5">
                                Abrir
                            </button>

                            <div class="modal fade" id="ventanaModal5" tabindex="-1" role="dialog"
                                aria-labelledby="tituloVentana" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="tituloVentana">Rendimiento</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!--div class="alert alert-success"-->
                                            <div class="modal-body" style="text-align: justify;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, asperiores, facere cum dolores nemo exercitationem ea velit enim illum quasi nihil aliquid sequi iste ratione, explicabo minus! Architecto, quasi quos?   
                                            </div>
                                            <!--/div-->
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" data-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Hasta aquí-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x  fa-cogs text-primary mb-4"></i>
                            <h3 class="h4 mb-2"><a href="assets/documentos/Rendimiento.pdf"
                                    target="_blank">Testabilidad</a>
                            </h3>
                            <p class="text-muted mb-0" style="text-align: justify;"></p><br>
                            <!--======================================
                                        Testabilidad-MODAL
                                        ======================================-->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal6">
                                Abrir
                            </button>

                            <div class="modal fade" id="ventanaModal6" tabindex="-1" role="dialog"
                                aria-labelledby="tituloVentana" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="tituloVentana">Testabilidad</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!--div class="alert alert-success"-->
                                            <div class="modal-body" style="text-align: justify;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore suscipit, quos voluptas veritatis quasi cupiditate nemo aut odit possimus ea, corrupti numquam molestias optio pariatur libero quae, sunt doloribus reprehenderit?

                                            </div>
                                            <!--/div-->
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" data-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Hasta aquí-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <!--======================================
        Sección para la estadistica
        ======================================-->
    </section><!-- Promo Section "Statistics" -->
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge">14+</span>
            <br>Socios
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">55+</span>
            <br>Proyectos Realizados
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">89+</span>
            <br>Clientes Felices
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">150+</span>
            <br>Ventas de Productos
        </div>
    </div><br>
    <!--======================================
Clientes
======================================-->

    <div class="py-5">
        <h2 class="text-center mt-0">Nuestros Clientes</h2>

        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="mt-5">
                    <a href="https://www.microsoft.com/es-co" target="_blank">
                        <i class="fab fa-4x fa-windows text-primary-clientes mb-4"></a></i>
                    <h3 class="h4 mb-2">Microsoft</h3>
                    <p class="text-muted mb-0">
                </div>
            </div>
            <div class="col-lg-3  text-center">
                <div class="mt-5">
                    <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=1661872069&extra_1=s%7Cc%7C320310174908%7Ce%7Cfacebook%7C&placement=&creative=320310174908&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1661872069%26adgroupid%3D64818685900%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D1003659%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjw-LOEBhDCARIsABrC0TnJrEiNDVY9alUBFVExE0wcZmbVRO-oekR8_FHNoS4kZsVWiq2jxBUaAvX3EALw_wcB"
                        target="_blank">
                        <i class="fab fa-4x fa-facebook-square text-primary-clientes mb-4"></a></i>
                    <h3 class="h4 mb-2">Facebook</h3>
                    <p class="text-muted mb-0">
                </div>
            </div>
            <div class="col-lg-3  text-center">
                <div class="mt-5">
                    <a href="https://pay.google.com/about/" target="_blank">
                        <i class="fab fa-4x fa-google-wallet text-primary-clientes mb-4"></a></i>
                    <h3 class="h4 mb-2">Google</h3>
                    <p class="text-muted mb-0">
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="mt-5">
                    <a href="https://www.paypal.com/co/home" target="_blank">
                        <i class="fab fa-4x fa-paypal text-primary-clientes mb-4"></a></i>
                    <h3 class="h4 mb-2">Testeabilidad</h3>
                    <p class="text-muted mb-0">
                </div>
            </div>
        </div>
    </div>
    <!--======================================
    SECCIÓN SUSCRIBITE
======================================-->
    <!-- suscribete-->
    <section class="suscribete-section" id="suscribete">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <i class="far fa-smile-wink fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">¡Suscríbete para recibir actualizaciones!</h2>
                    <form class="form-inline d-flex">
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email"
                            placeholder="Correo Eléctronico..." />
                        <a class="btn btn-primary js-scroll-trigger" href="contactenos.blade.php"
                            type="submit">Enviar</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

@section('footer')
@stop

@stop



