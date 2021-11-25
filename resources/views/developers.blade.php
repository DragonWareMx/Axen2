@extends('layouts.layout')

@section('title')
Developers
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
                    <div class="title-view uk-margin-small-bottom">Presentación</div>
                    <div class="text-content">
                        ¿Quieres saber quiénes somos, qué hacemos y cómo podemos ayudarte a obtener la libertad financiera?
                        Si llegaste hasta aquí ya diste el primer paso, revisa la información que te compartimos y si tienes
                        dudas o quieres saber más al respecto, contacta con tu developer. Él está para ayudarte a lograr tus objetivos.
                        Descarga la presentación <a href={{asset('/documentos/presentaciongeneral.pdf')}} target="_blank" style="font-weight:bold">AQUÍ</a>.
                        <br>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-fade; target: .img-nosotros; delay: 400; repeat: true">
                <video src={{asset('/img/developers/Video_que_es_un_broker.mp4')}} controls poster={{asset('/img/developers/preview.png')}}></video>
            </div>
        </div>

        <div class="uk-width-4-5@xl uk-margin-auto uk-margin-large-bottom uk-flex uk-flex-wrap-reverse uk-flex-middle">
            <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-fade; target: .img-nosotros; delay: 400; repeat: true">
                <video src={{asset('/img/developers/Que_es_una_fin_tech.mp4')}} controls poster={{asset('/img/developers/preview2.png')}}></video>
            </div>
            <div class="uk-width-1-2@m">
                <div class="uk-width-5-6@m uk-margin-auto" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="title-view uk-margin-small-bottom">¿Qué es un bróker?</div>
                    <div class="text-content uk-margin-large-bottom">
                        Cuando hablamos de un bróker nos referimos a un intermediario financiero,
                        persona o empresa que está autorizada para realizar operaciones en los mercados
                        bursátiles a nombre de terceros. Descubre más y dale play a nuestro video.
                    </div>

                    <div class="title-view uk-margin-small-bottom">El futuro ha llegado</div>
                    <div class="text-content">
                        Entérate qué es una Fintech y cómo puede ayudarte a obtener la libertad financiera.
                        “Disfruta de la vida, nosotros nos encargamos del resto”.
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
