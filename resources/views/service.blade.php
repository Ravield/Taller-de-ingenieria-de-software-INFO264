@extends('layouts/timerLayout')

@section('contenido') <!-- sirve para referenciar al yield-->
<!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Servicios</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{route('home')}}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Servicios</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#Page header-->

        <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".2s">Áreas de servicio</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Nos especializamos en múltiples áreas de práctica abarcando<br> los siguientes servicios.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-android-person"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Civiles.</h4>
                                        <p>- Deudas.<br>- Arriendos.<br>- Tercerías.<br>
                                        - Juicios Ejecutivos, Ordinarios, Sumarios.<br>
                                        - Cambio de Nombre y Apellidos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-people"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Familia.</h4>
                                    <p>- Divorcios.<br>
                                    - Alimentos.<br>
                                    - Cuidado Personal.<br>
                                    - Compensación Económica.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-book"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Penal.</h4>
                                     <p>- Suspensión Condicional del Procedimiento.<br>
                                    - Acuerdos Reparatorios.<br>
                                    - Juicios Abreviados y Simplificados.<br>
                                    - Audiencias de preparación de Juicio Oral<br>
                                    - Juicio Oral<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-briefcase"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Laboral.</h4>
                                     <p>- Despidos Injustificados.<br>
                                        - Despido Indirecto.<br>
                                        - Defensa Juicio Laboral.<br>
                                        - Indemnizaciones por Accidentes Laborales.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-locked"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Corte de Apelaciones.</h4>
                                    <p>- Recurso de Protección.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-document-text"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Comercial.</h4>
                                    <p>- Confección de escrituras de Sociedad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#feature -->

         <!--
        ==================================================
            Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">¿QUIERE TRABAJAR CON NOSOTROS?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Si tiene dudas o quiere asesorarse con nosotros no dude en contactarnos ,</br>es facil y sin costo, trataremos de contestale en la brevedad.</p>
                            <a href="{{route('contact')}}" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contactenos</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@stop
