<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Surferzone - @yield('title')</title>
    <link rel="icon" href="assets/img/favicon.ico" />
    <!-- Bibliotecas CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
    <script src="assets/js/modernizr.js" type="text/javascript"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <!-- START MAIN-WRAPPER -->
    <div class="main-wrapper">
        <!-- START HEADER-CONTAINER -->
        <header id="header-container">
            <!-- START DESKTOP-MENU -->
            <div class="desktop-menu">
                <!-- START TOPBAR -->
                <div class="topbar">
                    <div class="col-md-12">
                        <ul class="options">
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ route('admin.home') }}">Área Administrativa</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Entrar</a></li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">Cadastre-se</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                            <li>
                                <a href="{{ route('cart.show') }}" class="bag">
                                    <i class="fa fa-shopping-bag"></i>
                                    @if(auth()->user() && auth()->user()->cart != null)
                                        @if(auth()->user()->cart->products->count() > 0)
                                            <span class="count">
                                                {{ auth()->user()->cart->products->count() }}
                                            </span>
                                        @endif
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END TOPBAR -->
                <!-- START NAME-LOGO -->
                <div class="name-logo">
                    <a href="/">
                        <img class="top-logo" src="{{ asset('img/logo.png') }}" alt="logo" />
                    </a>
                </div>
                <!-- END NAME-LOGO -->
                <!-- START MENU-NAV -->
                <nav class="menu menu-nav">
                    <ul class="first-level">
                        <li class="list-menu">
                            <a class="first-level" href="#0">
                                <i class="fa fa-bars" aria-hidden="true"></i> MENU</a>
                            <div class="second-level">
                                <div class="second-level-wrapper">
                                    <div class="col-md-4">
                                        <div class="second-level-title">
                                            <h2>VESTUÁRIO</h2>
                                        </div>
                                        <div class="second-level-content">
                                            <ul>
                                                <li><a href="#0">Chinelo</a></li>
                                                <li><a href="#0">Camisetas</a></li>
                                                <li><a href="#0">Camisas</a></li>
                                                <li><a href="#0">Bermudas</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="second-level-title">
                                            <h2>SURFING</h2>
                                        </div>
                                        <div class="second-level-content">
                                            <ul>
                                                <li><a href="#0">Pranchas</a></li>
                                                <li><a href="#0">Roupa de Mergulho</a></li>
                                                <li><a href="#0">Leash</a></li>
                                                <li><a href="#0">Quilhas</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="second-level-title">
                                            <h2>ACESSÓRIOS</h2>
                                        </div>
                                        <div class="second-level-content">
                                            <ul>
                                                <li><a href="#0">Capa de Prancha</a></li>
                                                <li><a href="#0">Óculos de sol</a></li>
                                                <li><a href="#0">Chapéus</a></li>
                                                <li><a href="#0">Carteira</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- END MENU-NAV -->
            </div>
            <!-- END DESKTOP-MENU -->
        </header>
        <!-- END HEADER-CONTAINER -->
        @yield('content')
        <!-- START FOOTER -->
        <footer>
            <ul class="redes-sociais">
                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="copyright">
                <p>&copy; Copyright Surfzone 2020 - Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
