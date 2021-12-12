@extends('layouts.layout')

@section('title')
Login
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
            Restaurar contraseña
        </div>
            <form id="registro_dev" action="{{ route('password.email') }}" method="post" class="uk-flex uk-flex-center uk-flex-middle">
            @csrf
                <div class="card-email uk-flex uk-flex-center uk-flex-middle uk-flex-wrap uk-padding-large">

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

                        <div class="label-txta">Ingresa tu correo electrónico:</div>
                        <input id="password" type="password" class="uk-text-area uk-margin-small-bottom taC" name='password' required>

                        <button type="submit" class="btn-contacto uk-margin-small-bottom"
                            style="cursor:pointer">Enviar link de restauración</button>
                </div>
            </form>
    </div>

    {{-- <img src={{asset('/img/productos/onda5.png')}} class="img-onda-abajo" uk-scrollspy="cls: uk-animation-slide-left; repeat: false"> --}}
@endsection
