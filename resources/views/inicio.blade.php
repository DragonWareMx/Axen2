@extends('layouts.layout')

@section('title')
    Inicio
@endsection

@section('head')
    {{-- CSS --}}
    <link rel="stylesheet" href={{asset("/css/inicio.css")}}>
@endsection

@section('body')
    {{-- parte blanca --}}
    <div class='ini_background' style='background-color:white;padding-top:100px;'>
        <div class='ini_content'>
            {{-- <img src={{asset('/img/inicio/poli1.svg')}} style='position: absolute; left:-192px; top:400 '> --}}
            <div style='color:#2E3E58;font-size:100px;font-weight:bold;line-height:1;font-family:poppins;' class='uk-width-1-1'>Que tu dinero</div>
            <div style='color:#2E3E58;font-size:46px;font-weight:medium;margin-top:0px;' class='uk-width-1-1'>Trabaje mientras descansas</div>
            <a class='ini_button1'>Más</a>
        </div>
    </div>

    {{-- parte azul --}}
    <div class='ini_background' style='background:no-repeat center url("/img/back/inicio2.jpg");background-size:cover;'>
        <div class='ini_content'>
            <img src={{asset('/img/logos/axenblanco.png')}} class='ini_logo'>
            <div style='color:white;font-size:57px;font-weight:bold;line-height:1;' class='uk-width-1-1'>Sobre nosotros</div>
            <div style='color:white;font-size:18px;margin-top:10px;' class='uk-width-2-3'>Somos una Empresa Internacional de Tecnología Financiera con productos y servicios especializados.</div>
            <a class='ini_button2'>Texto</a>
        </div>
    </div>
@endsection