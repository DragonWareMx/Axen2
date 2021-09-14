@extends('layouts.layout')

@section('title')
Broker Financiero
@endsection

@section('head')
{{-- CSS --}}
<link rel="stylesheet" href={{asset("/css/productos.css")}}>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
@endsection

@section('header')
    <img src={{asset('/img/productos/onda.png')}} class="img-onda" uk-scrollspy="cls: uk-animation-slide-top; repeat: false">
    <div class="uk-container uk-container-large uk-width-1-1 uk-margin-auto uk-padding uk-padding-remove-top uk-padding-remove-bottom" 
    style="margin-top:140px !important">
        
        <div class="uk-width-1-1 uk-padding-large uk-padding-remove-bottom uk-padding-remove-top uk-flex uk-flex-wrap uk-margin-medium-bottom container-info-product">
            <div class="uk-width-1-2@m">
                <div class="uk-width-1-1 txt-title-product uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">BROKER FINANCIERO</div>
                
                <div class="uk-width-1-1 uk-margin-medium-bottom uk-flex uk-flex-middle" uk-grid>
                    <div uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                        <img src={{asset('/img/productos/recurso3.svg')}} class="img-icon-product">
                    </div>
                    <div class="uk-width-expand@l txt-descrip-product">
                        Cuando hablamos de un bróker nos referimos a un intermediario financiero, 
                        persona o empresa que está autorizada para realizar operaciones en los mercados bursátiles
                        a nombre de terceros.
                    </div>
                </div>

                <div class="uk-width-1-1 txt-descrip-product">
                    Un bróker acerca a las personas a los mercados financieros de todo el mundo. Recuerda que se trata
                    de una figura necesaria y obligatoria si tienes la intención de operar los mercados financieros. 
                    Cada bróker se especializa en productos específicos y es importante encontrar uno que se ajuste a tus
                    necesidades como inversionista. 
                </div>
            </div>
            <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-fade; target: .img-producto; delay: 400; repeat: true">
                <img src={{asset('/img/productos/img4.png')}} class="img-producto">
            </div>
        </div>
    </div>
    
    <img src={{asset('/img/productos/onda5.png')}} class="img-onda-abajo" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
@endsection