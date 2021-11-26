<!-- resources/views/components/layout.blade.php -->

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('title')
    </title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href={{asset("/css/inicio.css")}}>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="icon" href="{{ asset('/img/logos/favicon.png') }}">
    @yield('head')
</head>

<body style="font-family: 'Poppins', sans-serif;">
    {{-- NAVBAR --}}
    <div class="uk-position-top" id="top">
        <nav class="uk-navbar-container uk-navbar-transparent uk-light" data-uk-navbar="dropbar: false;" data-uk-sticky="animation: uk-animation-slide-top;
                                sel-target: .uk-navbar-container;
                                cls-active: uk-navbar-sticky;
                                cls-inactive: uk-navbar-transparent uk-light; top: 0"
            style="@if(Route::current()->getName() == 'nosotros') background-color: #2E3E58 @endif">
            {{-- LOGO --}}
            <div class="uk-navbar-left uk-container">
                <a class="uk-navbar-item uk-logo" href={{route('inicio')}}>
                    <img src="@if(Route::current()->getName() == 'nosotros'){{asset(" /img/logos/axenblanco.png")}}@else
                        {{asset("/img/logos/axennegro.png")}} @endif" class="uk-margin-top uk-margin-bottom" width="200"
                        height="51" />
                </a>
            </div>

            <!-- social icons - hide on mobile -->
            <div class="uk-navbar-right uk-container">
                <ul class="uk-navbar-nav uk-visible@s">
                    <li class="uk-active">
                        <a href={{route('nosotros')}}
                            class="@if(Route::current()->getName() == 'nosotros')menoItemNos active @else menoItem @endif">Nosotros</a>
                    </li>
                    <li>
                        <a href="/inicio#temas"
                            class="@if(Route::current()->getName() == 'nosotros')menoItemNos @else menoItem @endif @if(Route::current()->getName() == 'productos') active @endif">Temas</a>
                    </li>
                    <li>
                        <a href="/inicio#contacto"
                            class="@if(Route::current()->getName() == 'nosotros')menoItemNos @else menoItem @endif @if(Route::current()->getName() == 'contacto') active @endif">Contacto</a>
                    </li>
                </ul>
                <a href="#" class="uk-navbar-toggle uk-hidden@s menoItem" uk-navbar-toggle-icon
                    uk-toggle="target: #sidenav"></a>
            </div>
        </nav>
    </div>

    {{-- NAVBAR RESPONSIVO --}}
    <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav">
                <li class="uk-active">
                    <a href={{route('nosotros')}}>Nosotros</a>
                </li>
                <li>
                    <a href="/inicio#temas">Temas</a>
                </li>
                <li>
                    <a href="/inicio#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>

    {{-- HEADER --}}
    <header id="hero-header">
        <div class="uk-section-secondary">
            @yield('header')
        </div>
    </header>

    {{-- CONTENIDO --}}
    @yield('body')

    {{-- FOOTER --}}
    <footer id="page-footer" class="uk-margin-top">
        <div class="uk-section-default">
            <div class="uk-section uk-light uk-background-cover"
                style="background-image: url({{asset('/img/inicio/footer.svg')}}); background-color:#0071C2;">

                <div class="uk-container uk-padding-small">
                    <img src="{{asset(" /img/logos/axenblanco.png")}}" class="footer_img uk-align-center" />
                    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                        {{-- MENU --}}
                        <div uk-flex uk-flex-column>
                            <a class='footer_menu @if(Route::current()->getName() == ' nosotros') footer_menu_active
                                @endif' href={{route('nosotros')}}>Nosotros</a>
                            <a class='footer_menu @if(Route::current()->getName() == ' productos') footer_menu_active
                                @endif' href="/inicio#temas">Temas</a>
                            <a class='footer_menu @if(Route::current()->getName() == ' contacto') footer_menu_active
                                @endif' href="/inicio#contacto">Contacto</a>
                        </div>
                        {{-- PODEMOS AYUDARTE --}}
                        <div>
                            <h3>Podemos ayudarte</h3>
                            <p>
                                {{-- T. 800 4455 5566 667 76
                                <br>
                                T. 800 4455 5566 667 76 --}}
                                <br>
                                contacto@axencapital.com
                                <br>
                                <a href="{{route('privacidad')}}" target="_blank" rel="noopener noreferrer">Aviso de
                                    privacidad</a>
                            </p>
                        </div>
                        {{-- REDES SOCIALES --}}
                        <div>
                            <div class="uk-flex uk-flex-wrap uk-flex-wrap-around">
                                <div class="uk-width-1-2">
                                    <a href="https://www.facebook.com/AxenCapital" target="_blank" class="footer_icon"
                                        uk-icon="icon: facebook; ratio: 3;"></a>
                                </div>
                                <div class="uk-width-1-2">
                                    <a href="" target="_blank" class="footer_icon"
                                        uk-icon="icon: twitter; ratio: 3;"></a>
                                </div>
                                <div class="uk-width-1-2" style="margin-top: 20px">
                                    <a href="https://www.instagram.com/axencapital" target="_blank" class="footer_icon"
                                        uk-icon="icon: instagram; ratio: 3;"></a>
                                </div>
                                <div class="uk-width-1-2" style="margin-top: 20px">
                                    <a href="" target="_blank" class="footer_icon"
                                        uk-icon="icon: linkedin; ratio: 3;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="position: relative; bottom: 0; margin-bottom: -40px; margin-left: 50px; font-size: 14px">
                    Desarrollado por <a href="https://dragonware.com.mx/" target="_blank">Dragonware <img
                            src="/img/logos/dragonware.png" height="14px" style="height: 14px" /></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
