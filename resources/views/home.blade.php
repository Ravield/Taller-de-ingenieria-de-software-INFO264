@extends('layouts.timerLayout')

@section('contenido') <!-- sirve para referenciar al yield-->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">

                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>SOMOS GENTE CON</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">RESPONSABILIDAD</b>
                                    <b>ACTITUD</b>
                                    <b>COMPROMISO</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    Mattar & Asociados es un Estudio Jurídico cuyos socios fundadores son los abogados<br> Gabriela Hidalgo Sáez, Pablo Obreque Pardo y Camila Mattar Hazbun, asociados con el objetivo de potenciar eficientemente sus conocimientos para así ofrecer un servicio de calidad en todo Chile.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->

            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                SOBRE NOSOTROS
                                </h2>
                                <p>
                                    Somos un estudio comprometido con la excelencia especializados en áreas comerciales, empresariales, laborales y familia. Nuestra misión se define en torno a los conceptos de excelencia, confianza y eficiencia procurando entregar a nuestros clientes una atención cercana, profesional y oportuna.
                                </p>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="timer/images/about/about.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->


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
