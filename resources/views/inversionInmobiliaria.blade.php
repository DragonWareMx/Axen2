@extends('layouts.layout')

@section('title')
Forex
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
                <div class="uk-width-1-1 txt-title-product uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">¿QUÉ ES FOREX?</div>
                
                <div class="uk-width-1-1 uk-margin-medium-bottom uk-flex uk-flex-middle" uk-grid>
                    <div uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                        <img src={{asset('/img/productos/recurso2.svg')}} class="img-icon-product">
                    </div>
                    <div class="uk-width-expand@l txt-descrip-product">
                        Forex es una oportunidad para ti y para llegar a la libertad financiera
                        que te permitirá dejar de preocuparte por el dinero y empezar a vivir tus sueños.
                    </div>
                </div>

                <div class="uk-width-1-1 txt-descrip-product">
                    Forex es el mercado financiero más grande de todo el mundo, en el cual se intercambian todas 
                    las divisas. Los participantes del mercado compran y venden divisas a través de un bróker, 
                    y pueden tener acceso a aproximadamente más de 5 trillones de dólares al día.
                </div>
            </div>
            <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-fade; target: .img-producto; delay: 400; repeat: true">
                <img src={{asset('/img/productos/img5.jpg')}} class="img-producto" style="border-radius: 32px">
            </div>
        </div>
    </div>
    
    <img src={{asset('/img/productos/onda5.png')}} class="img-onda-abajo" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
@endsection