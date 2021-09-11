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


<script src="js/jquery.min.js"></script>
<script src="js/jquery.maphighlight.min.js"></script>
<script type="text/javascript">
    /* State IDS */
		var states = ['AGU', 'BCN', 'BCS', 'CAM', 'CHH',
			'CHP', 'COA', 'COL', 'DIF', 'DUR',
			'GRO', 'GUA', 'HID', 'JAL', 'MEX',
			'MIC', 'MOR', 'NAY', 'NLE', 'OAX',
			'PUE', 'QUE', 'ROO', 'SIN', 'SLP',
			'SON', 'TAB', 'TAM', 'TLA', 'VER',
			'YUC', 'ZAC'
		];
		/* State Names */
		var state_names = ['Aguascalientes', 'Baja California Norte', 'Baja California Sur', 'Campeche', 'Chihuahua', 'Chiapas', 'Coahuila', 'Colima', 'CDMX', 'Durango', 'Guerrero', 'Guanajuato', 'Hidalgo', 'Jalisco', 'Edo. Mexico', 'Michoacán', 'Morelos', 'Nayarit', 'Nuevo León', 'Oaxaca', 'Puebla', 'Queretaro', 'Quintana Roo', 'Sinaloa', 'San Luis Potosí', 'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz', 'Yucatán', 'Zacatecas'];
        var contacto = ['Mail: contacto@axen.com']
        var tel = ['T: 4431XXXXXX']
		$(function () {
			$('.map').maphilight({ fade: true });
		});
		$(document).ready(function () {
			$('.area').hover(function () {
				var id = $(this).attr('id');
				var state = $.inArray(id, states);

				$('#edo').html(state_names[state] + '<br><br>' + contacto[0] + '<br>' + tel[0]);
			});
		});
</script>
@endsection

@section('header')
{{-- parte blanca --}}
<div class='ini_background' style='background-color:white;padding-top:100px;'>
    <div class='ini_content uk-container uk-container-large'>
        <img src={{asset('/img/inicio/poli1.svg')}} class='ini_poli1'>
        <img src={{asset('/img/inicio/poli2.svg')}} class='ini_poli2'>
        <img src={{asset('/img/inicio/poli3.svg')}} class='ini_poli3'>
        <img src={{asset('/img/inicio/poli4.svg')}} class='ini_poli4'>
        <img src={{asset('/img/inicio/graph1.svg')}} class='ini_graph1'>
        <div class="back-right" style="z-index: 4"></div>
        <div style='color:#2E3E58;font-size:100px;font-weight:bold;line-height:1;font-family:poppins;'
            class='uk-width-1-1'>Que tu dinero</div>
        <div style='color:#2E3E58;font-size:46px;font-weight:medium;margin-top:0px;' class='uk-width-1-1'>Trabaje
            mientras descansas</div>
        <a class='ini_button1'>Más</a>
    </div>
</div>
</div>

{{-- parte azul --}}
<div class='ini_background' style='background:no-repeat center url("/img/back/inicio2.jpg");background-size:cover;'>
    <div class='ini_content uk-container uk-container-large'>
        <img src={{asset('/img/logos/axenblanco.png')}} class='ini_logo'>
        <div style='color:white;font-size:57px;font-weight:bold;line-height:1;' class='uk-width-1-1'>Sobre nosotros
        </div>
        <div style='color:white;font-size:18px;margin-top:10px;' class='uk-width-2-3'>Somos una Empresa Internacional de
            Tecnología Financiera con productos y servicios especializados.</div>
        <a class='ini_button2'>Texto</a>
    </div>
</div>


@endsection

@section('body')
@include('mapa')
@endsection