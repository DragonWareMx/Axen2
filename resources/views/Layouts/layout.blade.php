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

        @yield('head')
    </head>
    <body>
        <header>
            <!-- Main Navbar -->
            <nav class="uk-container uk-navbar">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a href="#">UIKit<strong>ResMenu</strong></a>
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
                        <li><a class="uk-text-large" href="https://shubhamjain.co/about/">about</a></li>
                        <li><a class="uk-text-large" href="https://shubhamjain.co/">blog</a></li>
                    </ul>
                    <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
                </div>
            </nav>
        </header>

    <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav">
                <li><a class="uk-text-large" href="https://shubhamjain.co/about/">about</a></li>
                <li><a class="uk-text-large" href="https://shubhamjain.co/">blog</a></li>
            </ul>
        </div>
    </div>

        @yield('body')
    </body>
</html>