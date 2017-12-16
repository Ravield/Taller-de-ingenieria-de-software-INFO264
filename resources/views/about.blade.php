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
                                    <a href="index.html">
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
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Por que nos diferenciamos</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                                
                            </p>
                            <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
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
                        Por que elegirnos
                        </h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                        </p>
                    </div>
                    <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <h2 class="item_title">
                        Que gana con nosotros
                        </h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                        </p>
                    </div>
                    <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                        <h2 class="item_title">
                        Meet The Energy
                        </h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
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