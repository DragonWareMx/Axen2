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
                                cls-inactive: uk-navbar-transparent uk-light; top: 0">
            {{-- LOGO --}}
            <div class="uk-navbar-left uk-container">
                <a class="uk-navbar-item uk-logo" href={{route('inicio')}}>
                    <img src={{asset("/img/logos/axennegro.png")}} class="uk-margin-top uk-margin-bottom" width="200"
                        height="51" />
                </a>
            </div>

            <!-- social icons - hide on mobile -->
            <div class="uk-navbar-right uk-container">
                <ul class="uk-navbar-nav uk-visible@s">
                    <li class="uk-active">
                        <a href={{route('nosotros')}} class="menoItem">Nosotros</a>
                    </li>
                    <li>
                        <a href={{route('productos')}} class="menoItem">Productos</a>
                    </li>
                    <li>
                        <a href={{route('contacto')}} class="menoItem">Contacto</a>
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
                    <a href={{route('productos')}}>Productos</a>
                </li>
                <li>
                    <a href={{route('contacto')}}>Contacto</a>
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
    <footer id="page-footer" class="uk-margin-top" uk-sticky>
        <div class="uk-section-default">
            <div class="uk-section uk-light uk-background-cover" style="background-image: url({{asset('/img/productos/fondo.png')}})">
                <div class="uk-container uk-padding-small">
                    <p class="uk-text-small">copyright(c).</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>