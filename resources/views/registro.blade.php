@extends('layouts.layout')

@section('title')
Bienvenido a Axen
@endsection

@section('head')
{{-- CSS --}}
<link rel="stylesheet" href={{asset("/css/productos.css")}}>
<link rel="stylesheet" href={{asset("/css/registro.css")}}>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
@endsection

@section('header')
    {{-- <img src={{asset('/img/productos/onda.png')}} class="img-onda" width="100%" uk-scrollspy="cls: uk-animation-slide-top; repeat: false"> --}}
    <div class="uk-container uk-container-large uk-width-1-1 uk-margin-auto uk-padding uk-padding-remove-top uk-padding-remove-bottom" style="margin-top:140px !important">
        @if (session('success'))
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close style="color:black"></a>
            <p>{{ session('success') }}</p>
        </div>
        @elseif (session('error'))
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close style="color:black"></a>
            <p>{{ session('error') }}</p>
        </div>
        @endif



        <div class="uk-width-1-1 txt-title-product uk-margin-bottom" style="text-align: center" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
            Bienvenido
        </div>

            <div class=""
            uk-scrollspy="cls: uk-animation-slide-top; repeat: true">
            <form action="/registro-visita" method="post" class="uk-flex uk-flex-center uk-flex-middle">

                @csrf
                <div class="card-email uk-flex uk-flex-center uk-flex-middle uk-flex-wrap uk-padding-large">
                    <div class="text-contacto">Nos gustaría hacerte unas preguntas</div>
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                        <div class="uk-alert-warning" uk-alert>
                            <a class="uk-alert-close" uk-close style="color:black"></a>
                            <p>{{ $error }}</p>
                        </div>
                        @endforeach
                    </ul>
                    @endif
                    <div class="label-txta">Nombre:</div>
                    <textarea class="uk-text-area uk-margin-small-bottom taC" name="nombre" id="nombre" cols="30"
                        rows="10" required></textarea>
                    <div class="label-txta">Teléfono:</div>
                    <textarea class="uk-text-area uk-margin-small-bottom taC" name="telefono" id="" cols="30" rows="10"
                        required></textarea>
                    <div class="label-txta">Correo electrónico:</div>
                    <textarea class="uk-text-area uk-margin-small-bottom taC" name="email" id="mail" cols="30"
                        rows="10" required></textarea>
                    <div class="label-txta">¿Quién te referenció?:</div>
                    <textarea class="uk-text-area uk-margin-bottom taC" name="referencia" id="" cols="30" rows="10"
                        ></textarea>

                    <div class="label-txta">¿En qué sucursal nos visitas?:</div>
                    <select class="uk-select uk-margin-bottom taC" name="sucursal" cols="30" rows="10" required>
                        <option value="" disabled selected>Ciudad</option>
                        <option>Boca del Río, Ver.</option>
                        <option>Ciudad de México</option>
                        <option>Cuernavaca, Mor.</option>
                        <option>Guadalajara, Jal.</option>
                        <option>Leon, Gto.</option>
                        <option>Morelia, Mich.</option>
                        <option>Uruapan, Mich.</option>
                        <option>Xalapa, Ver.</option>
                    </select>

                        <div class="uk-margin-bottom uk-width-1-1 uk-margin-large-left">
                        <div class="label-txta uk-flex uk-flex-middle">¿Has leído alguno de estos libros?, selecciónalos:</div>
                        <label class='politicas-txt'><input class="uk-checkbox uk-margin-left check-or" type="checkbox" name="curso_solvencia"> El curso de la solvencia</label>
                        <label class='politicas-txt'><input class="uk-checkbox uk-margin-left check-or" type="checkbox" name="dinero_espiritual"> Dinero Espiritual</label>
                    </div>

                    <div class="uk-margin-bottom uk-width-1-1 uk-margin-large-left">
                        <div class="label-txta">¿Has asistido a alguno de estos eventos?, selecciónalos:</div>
                        <label class='politicas-txt'><input class="uk-checkbox uk-margin-left check-or" type="checkbox" name="avatar">Avatar Financiero</label>
                        <label class='politicas-txt'><input class="uk-checkbox uk-margin-left check-or" type="checkbox" name="avatrading">Avatrading</label>
                    </div>

                    <div class="uk-margin-bottom uk-width-1-1 uk-margin-large-left">
                        <div class="label-txta">¿Te gustaría recibir información sobre cómo obtener la libertad financiera?</div>
                        <label class='politicas-txt'><input class="uk-radio uk-margin-left check-or" type="radio" name="informacion" value="true" checked>Sí, claro</label>
                        <label class='politicas-txt'><input class="uk-radio uk-margin-left check-or" type="radio" name="informacion" value="false"> No por el momento</label>
                    </div>



                    <button type="submit" class="btn-contacto uk-margin-small-bottom"
                        style="cursor:pointer">Enviar</button>
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-margin-bottom" style="width: 90%">
                        <label class="politicas-txt"><input class="uk-checkbox check-or" type="checkbox" required>Acepto las
                        <a href="{{route('privacidad')}}" target="_blank"> Políticas de
                        Privacidad </a> </label>
                    </div>
                </div>
            </form>
        </div>

    </div>

    {{-- <img src={{asset('/img/productos/onda5.png')}} class="img-onda-abajo" uk-scrollspy="cls: uk-animation-slide-left; repeat: false"> --}}
@endsection
