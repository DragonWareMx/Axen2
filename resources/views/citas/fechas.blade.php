@extends('layouts.layout')

@section('title')
Bienvenido, devéloper
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
            ¿Cuándo nos vemos?
        </div>
            <form id="registro_dev" action="/cita-store" method="post" class="uk-flex uk-flex-center uk-flex-middle">
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

                        <div class="label-txta">Elige el día (a partir de mañana):</div>
                        <textarea class="uk-text-area uk-margin-small-bottom taC" name="fecha" id="nombre" cols="30"
                            rows="10" required></textarea>
                        <div class="label-txta">Elige la hora:</div>
                        <select class="uk-select uk-margin-bottom taC" name="hora" cols="30" rows="10" required>
                            <option value="08:00">08:00</option>
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                        </select>

                        <div class="label-txta">Las siguientes son las citas ya agendadas en tu oficina, considéralas antes de elegir tu fecha y hora</div>
                        <table class="uk-table uk-table-responsive uk-table-divider taC">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Duración</th>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <button type="submit" class="btn-contacto uk-margin-small-bottom"
                            style="cursor:pointer">Registrar</button>
                </div>
            </form>
    </div>

    {{-- <img src={{asset('/img/productos/onda5.png')}} class="img-onda-abajo" uk-scrollspy="cls: uk-animation-slide-left; repeat: false"> --}}
@endsection
