@extends('layouts/timerLayout')

@section('contenido')
<section class="moduler wrapper_404">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >404</h1>
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">Opps! Tenemos un problema</h2>
                            <p class="wow fadeInUp animated" data-wow-delay=".9s">La pagina que buscas a sido movida, eliminada, renombrada o puede que nunca existio.</p>
                            <a href="{{route('home')}}" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Volver</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop