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
                                    Con m, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
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
                                    Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only five centuries
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
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