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
                            <h2>Sobre Nosotros</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{route('home')}}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Nosotros</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ==================================================
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img src="timer/images//about/about-company.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">¿Por qué nos diferenciamos?</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">

                            </p>
                            <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                Trabajamos por el bien común de nuestros clientes , esperando alcanzar sus metas de la forma más profesional posible, cumpliendo altos estándares de éticos.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--
        ==================================================
            Company Feature Section Start
        ================================================== -->
        <section class="about-feature clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <h2>
                        Nuestra filosofía
                        </h2>
                        <p>
                            Nos hemos comprometido con la excelencia profesional, es nuestro deber como estudio seguir los mas altos estandares éticos en el ejercicio del derecho que es una actividad honorable y enriquecedora.
                        </p>
                    </div>
                    <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <h2 class="item_title">
                        Ambición por desafios
                        </h2>
                        <p>
                            Tenemos un estilo de colaboración y de trabajo en equipo asequible y abierto que combina la efectividad con la cohesión y la colegiabilidad de nuestros abogados, siempre aspirando a nuevos horizontes.
                        </p>
                    </div>
                    <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                        <h2 class="item_title">
                        Comprometidos con usted
                        </h2>
                        <p>
                            Nuestro compromiso es ayudar a nuestros clientes a alcanzar sus metas ofreciendo nuestras asesorías
                            jurídicas con un enfoque comercial de la más alta calidad. Nuestros clientes son nuestra primera prioridad.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!--
        ==================================================
            Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">Conozca al equipo</h2>
                    <div class="col-md-4">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <div class="team-img">
                                <img src="timer/images//team/team-1.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Pablo Obreque Pardo</h3>
                            <p class="team_designation">Abogado </p>
                            <p class="team_text">Universidad Austral de chile, diplomado en derecho tributario </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img src="timer/images//team/team-2.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Gabriela Hidalgo Sáez</h3>
                            <p class="team_designation">Abogada</p>
                            <p class="team_text">Universidad Austral de chile, diplomada en derechos sociales, políticas publicas y gestión global.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <div class="team-img">
                                <img src="timer/images//team/team-3.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Camila Mattar Hazbun</h3>
                            <p class="team_designation">Abogada</p>
                            <p class="team_text">Universidad Austral de chile, con experiencia en derecho de familia y derecho civil.</p>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
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
