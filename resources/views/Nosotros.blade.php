@extends('layouts.layout')

@section('title')
Nosotros
@endsection

@section('head')
{{-- CSS --}}
<link rel="stylesheet" href={{asset("/css/nosotros.css")}}>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
@endsection

@section('header')
    <div class="uk-container uk-container-large uk-width-1-1 uk-margin-auto uk-padding uk-padding-remove-top" 
    style="background-color:#2E3E58; margin-top:140px !important">
        <div class="uk-width-4-5@xl uk-margin-auto uk-margin-large-bottom uk-flex uk-flex-wrap uk-flex-middle">
            <div class="uk-width-1-2@m">
                <div class="uk-width-5-6@m uk-margin-auto" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="title-view uk-margin-small-bottom">¿Quiénes somos?</div>
                    <div class="text-content">
                        Somos una empresa dedicada a compartir una nueva cultura financiera, 
                        que da la oportunidad de generar riqueza. Fundada en 2017 para mejorar 
                        la calidad de vida de las personas, trabajamos con pasión para lograr 
                        nuestra visión: impactar positivamente el 1% de la población mundial y ayudarla
                        a cumplir sus sueños.
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-fade; target: .img-nosotros; delay: 400; repeat: true">
                <img src={{asset('/img/nosotros/img1.png')}} class="img-nosotros">
            </div>
        </div>

        <div class="uk-width-4-5@xl uk-margin-auto uk-margin-large-bottom uk-flex uk-flex-wrap-reverse uk-flex-middle">
            <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-fade; target: .img-nosotros; delay: 400; repeat: true">
                <img src={{asset('/img/nosotros/img2.png')}} class="img-nosotros">
            </div>
            <div class="uk-width-1-2@m">
                <div class="uk-width-5-6@m uk-margin-auto" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="title-view uk-margin-small-bottom">Nuestros valores</div>
                    <div class="text-content uk-margin-large-bottom">
                        Servicio
                        <br>
                        Honestidad
                        <br>
                        Pasión
                        <br>
                        Responsabilidad
                        <br>
                        Calidad
                        <br>
                        Amor
                        <br>
                        Gratitud
                    </div>

                    <div class="title-view uk-margin-small-bottom">Libertad financiera</div>
                    <div class="text-content">
                        La libertad financiera te permite disfrutar plenamente de la vida para no preocuparte 
                        nunca más por el dinero. Alcanzarla depende de darnos cuenta que existen formas distintas 
                        de generar ingresos, lo que te gestiona más tiempo para hacer lo que en realidad te gusta.
                        “Disfruta de la vida, nosotros nos encargamos del resto”.
                    </div>
                </div>
            </div>
            
        </div>
    </div>


@endsection