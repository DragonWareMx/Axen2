@extends('layouts.layout')

@section('title')
Inicio
@endsection

@section('head')
{{-- CSS --}}
<link rel="stylesheet" href={{asset("/css/mapa.css")}}>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
@endsection

@section('header')
    {{-- parte blanca --}}
    <div class='ini_background' style='background-color:white;padding-top:100px;'>
        <div class='ini_content uk-container uk-container-large'>
            <img src={{asset('/img/inicio/poli1.svg')}} class='ini_poli1'>
            <img src={{asset('/img/inicio/poli2.svg')}} class='ini_poli2'>
            <img src={{asset('/img/inicio/poli3.svg')}} class='ini_poli3'>
            <img src={{asset('/img/inicio/poli4.svg')}} class='ini_poli4'>
            <img src={{asset('/img/inicio/poli5.svg')}} class='ini_poli5'>
            <img src={{asset('/img/inicio/graph1.svg')}} class='ini_graph1'>
            <div class="back-right" style="z-index: 4"></div>
            <div class='ini_title1 uk-width-1-1'>Que tu dinero</div>
            <div class='ini_subtitle1 uk-width-1-1'>Trabaje mientras descansas</div>
            <a class='ini_button1'>Más</a>
        </div>
    </div>

    {{-- parte azul --}}
    <div class='ini_background' style='background-color:#2E3E58;z-index:20;'>
    {{-- <div class='ini_background' style='background-color:#2E3E58;background:no-repeat center url("/img/back/inicio2.jpg");background-size:cover;z-index:20;'> --}}
        <div class='ini_content uk-container uk-container-large'>
            <img src={{asset('/img/logos/axenblanco.png')}} class='ini_logo'>
            <div class='ini_title2 uk-width-1-1'>Sobre nosotros</div>
            <div class='ini_subtitle2'>Somos una Empresa Internacional de Tecnología Financiera con productos y servicios especializados.</div>
            <a class='ini_button2'>Texto</a>
        </div>
        <img src={{asset('/img/inicio/graph3.png')}} class='ini_graph3'>
    </div>


@endsection

@section('body')
@include('mapa')
@endsection