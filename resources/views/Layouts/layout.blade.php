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
        {{-- NAVBAR --}}
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
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
                </ul>
        
            </div>

            <div class="uk-navbar-right">
        
                <ul class="uk-navbar-nav">
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
        </nav>

        @yield('body')
    </body>
</html>