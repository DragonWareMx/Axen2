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

        @yield('head')
    </head>
    <body>
        <!-- Sticky navbar -->
        <div class="uk-position-top" id="top">
            <nav class="uk-navbar-container uk-navbar-transparent uk-light" data-uk-navbar="dropbar: false;"
                data-uk-sticky="animation: uk-animation-slide-top; 
                                sel-target: .uk-navbar-container; 
                                cls-active: uk-navbar-sticky; 
                                cls-inactive: uk-navbar-transparent uk-light; top: 0">
                <!-- LEFT -->
                <div class="uk-navbar-left uk-container">
                    <img src={{asset("/img/logos/axennegro.png")}} class="uk-margin-top uk-margin-bottom" width="200" height="51"/>
                    
                    {{-- <a class="uk-navbar-item uk-logo" href="#">Logo</a> --}}
                    <!-- show ul on desktop-tablet with uk-visible@m = Only affects device widths of 960px and larger-->
                    {{-- <ul class="uk-navbar-nav uk-visible@m">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li>
                            <a href="#">Parent</a>
                            <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            </div>
                        </li>
                        <li><a href="#">Item</a></li>
                        <li>
                            <a href="#">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                Features
                            </a>
                        </li>
                    </ul> --}}
                </div>
                
                <!-- social icons - hide on mobile -->
                <div class="uk-navbar-right uk-container">
                    <ul class="uk-navbar-nav uk-visible@s">
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
                    {{-- <div class="uk-navbar-item  uk-visible@m">
                    <a title="Twitter" href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
                    <a uk-tooltip="title: Facebook; pos: bottom-center" title="Facebook" href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                    <a title="Google Plus" href="" class="uk-icon-button" uk-icon="google-plus"></a>
                    </div> --}}
                </div>

                <!--off-canvas trigger hamburger btn. show only on mobile -->
                <a class="uk-navbar-toggle uk-hidden@m uk-container" href="#" data-uk-toggle="target: #offcanvas-nav-primary">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
                </div>
            </nav>
        </div>
        <!-- OFF-CANVAS NAVBAR (Trigger by hamburger btn)
        modes: push / slide / reveal /none 
        -->
        <nav id="offcanvas-nav-primary" data-uk-offcanvas="overlay: true; mode: push; flip: true">
            <!-- offcanvas setting  -->
            <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <!-- navbar content her -->
            <!-- A - logo -->
            <a class="uk-align-left uk-logo" href="#">Logo - offcanvas</a>
            <!-- B - nav -->
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-active"><a href="#">Active - offcanvas</a></li>
                <li class="uk-parent">
                <a href="#">Parent - offcanvas</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Child one - offcanvas</a></li>
                    <li><a href="#">Child two - offcanvas</a></li>
                </ul>
                </li>
                <li class=""><a href="#">ITEM - offcanvas</a></li>
            </ul>
            <!--C- contact us -->
            <footer class="uk-margin-large-top">
                <hr>
                <span uk-icon="icon: phone"></span>
                <a class="uk-link-text" href="#">+972 3434 3435</a>
            </footer>
            </div>
        </nav>
        
        <header id="hero-header">
            <div class="uk-section-secondary">
                @yield('header')
            </div>
        </header>

        @yield('body')

        {{-- <header>
            <!-- Main Navbar -->
            <nav class="uk-container uk-navbar">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <img src={{asset("/img/logos/axennegro.png")}} class="uk-margin-top uk-margin-bottom" width="200" height="51"/>
                        </li> 
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@s">
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
                    <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
                </div>
            </nav>
        </header>

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
    --}}
    </body>
</html>