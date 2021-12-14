@extends('layouts.layout')

@section('title')
Bienvenido, developer
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
            Sucursal {{Auth::user()->office->ciudad}}
        </div>

        <div class="uk-flex uk-flex-center uk-flex-middle">
            <div class="card-email uk-flex uk-flex-center uk-flex-middle uk-flex-wrap" style="width: 90%">
                <div class="text-contacto">Éstas son las citas agendadas:</div>
                <div class="label-txta" style="margin-bottom: 10px">Agenda una cita <a href="/cita-oficina" target="_blank" style="text-decoration: none; color:black;" >aquí.</a></div>


                        <table class="uk-table uk-table-responsive uk-table-divider taC" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Duración</th>
                                    <th>Servicio</th>
                                    <th>Devéloper</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($citas as $cita)
                                <tr>
                                    <td>{{$cita->fecha}}</td>
                                    <td>{{$cita->hora}}</td>
                                    @if ($cita->concepto == 'Cuerpos en el local')
                                        <td>Una hora</td>
                                    @else
                                        <td>Media hora</td>
                                    @endif
                                    <td>{{$cita->concepto}}</td>
                                    <td>{{$cita->developer->nombre}}</td>
                                    <td><a href="" target="_blank" style="text-decoration: none">{{$cita->developer->telefono}}</a></td>
                                    <td>{{$cita->developer->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <form action="{{ route('logout') }}" method="post" class="uk-flex uk-flex-right">
                            @csrf
                            @if ($old)
                                <a href="/citas" class="uk-button uk-button-default uk-margin-small-right">Ver recientes</a>
                            @else
                                <a href="/citas-previas" class="uk-button uk-button-default uk-margin-small-right">Ver anteriores</a>
                            @endif
                            <button class="uk-button uk-button-danger" type="submit">Cerrar sesión</button>
                        </form>



            </div>
        </div>


    </div>
    {{-- <img src={{asset('/img/productos/onda5.png')}} class="img-onda-abajo" uk-scrollspy="cls: uk-animation-slide-left; repeat: false"> --}}
@endsection
