<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Surferzone - Home</title>
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
                                    <a href="{{ url('/home') }}">Home</a>
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
                                <a href="#0" class="bag">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="count">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END TOPBAR -->
                <!-- START NAME-LOGO -->
                <div class="name-logo">
                    <a href="index.html">
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

        <!-- START SLIDER -->
        <section id="slider">
            <nav class="nav-imgbar flex-prev">
                <div class="custom-navigation">
                    <a class="prev slider-height">
                        <span class="icon-wrap"><i class="ion-ios-arrow-thin-left"></i></span>
                    </a>
                    <a class="next slider-height flex-next">
                        <span class="icon-wrap"><i class="ion-ios-arrow-thin-right"></i></span>
                    </a>
                </div>
            </nav>
            <div class="flexslider">
                <ul class="slides">
                    <li class="slider-height">
                        <div class="section-background bg" style="background-image: url({{ asset('img/slider-1.jpg') }});">
                            <div class="slider-overlay">
                                <div class="slider-box">
                                    <div class="slider-title">NEW SUMMER</div>
                                    <div class="slider-subtitle">COLLECTION</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="slider-height">
                        <div class="section-background bg">
                            <div class="slider-overlay">
                                <div class="slider-box">
                                    <div class="slider-title">BOARD SHORTS</div>
                                    <div class="slider-subtitle">MEN & WOMEN</div>
                                    <button class="slider-button">SEE MORE</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- END SLIDER -->
        <!-- START DIVIDER -->
        <section id="divider-a">
            <div class="section-background bg" style="background-image: url({{ asset('img/divider-a.jpg') }});height: 240px;">
            </div>
        </section>
        <!-- END DIVIDER -->
        <!-- START MOSAIC -->
        <section id="mosaic">
            <div class="gutter-sizer"></div>
            <div class="mosaic-item x2">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-1.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h1>CAMISETAS</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x1 mosaic-sizer">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-2.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>MOCHILAS</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x1">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-3.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>MOLETOM</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x1">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-4.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>OUTROS</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x2">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-5.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h1>PROMOÇÕES</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x2x1 mosaic-sizer">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-7.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>ROUPAS DE SURF</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x1">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-8.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>PRANCHAS</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x1">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-9.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>ACESSÓRIOS</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mosaic-item x1 wide">
                <a href="" class="section-background bg" style="background-image: url({{ asset('img/mosaic-6.jpg') }});">
                    <div class="overlay-mosaic">
                        <div class="box">
                            <h3>BODYBOARD</h3>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- END MOSAIC -->
        <!-- START DIVIDER -->
        <section id="divider-b">
            <div class="section-background bg" style="
                background-image: url({{ asset('img/divider-b.jpg') }});
                height: 240px;">
                <div class="divider-overlay">
                    <form class="input-group style-input-group">
                        <input class="placeholder" placeholder="Assine nossa newsletter" />
                        <span class="newsletter-input">
                            <button class="newsletter-input-i" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </form>
                </div>
            </div>
        </section>
        <!-- END DIVIDER -->

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
