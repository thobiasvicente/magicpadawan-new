<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Magic PadaWan</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- Material Kit CSS -->
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>

   
</head>

<body>
    <nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand">
                    Magic PadaWan </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a href="{{url('/home')}}" class="nav-link">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{'login'}}" class="nav-link">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{'register'}}" class="nav-link">Registrar</a>
                    </li>
                    @endif
                    @endauth
                    <li class="nav-item">
                        <a href="#icons" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contato</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/bg5.jpg')}}');transform: translate3d(0px, 0px, 0px);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">É novo no magic?</h1>
                    <h4>
                        Venha participar de torneios feitos para novatos, onde o foco é espalhar o aprendizado e a diversão!
                    </h4>
                    <br>
                    <a target="_blank" class="btn btn-danger btn-raised btn-lg">
                        Veja Mais!
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Projeto Magic Padawan!</h2>
                        <h5 class="description">Nossa ideia é iniciar jovens jogadores de Magic The Gathering na região Sul Fluminense através de campeonatos com premiações para todos participantes.</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="fas fa-chart-bar" aria-hidden="true"></i>
                                </div>
                                <h4 class="info-title">Ranking</h4>
                                <p>Temos um Ranking com os todos os PadaWans, afim de aumentar a competitividade.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="fas fa-gifts"></i>
                                </div>
                                <h4 class="info-title">Premiações</h4>
                                <p>As competições contam com premiações para os competidores.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h4 class="info-title">Aprenzidado</h4>
                                <p>Temos jogadores experientes que estarão sempre dispostos a ajudar os jovens PadaWans!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="carousel">
                <div class="container">
                    <div class="row">
                        <div class="col mr-auto ml-auto">
                            <!-- Carousel Card -->
                            <div class="card card-raised card-carousel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/camps/1.jpg')}}" alt="Primeiro slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i> Praça BNH, Participantes Campeonato MagicPadawan
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset('img/camps/2.jpg')}}" alt="Segundo slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i> Praça BNH, Arrecadação para o asilo
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/camps/3.jpg')}}" alt="Terceiro slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i> Praça BNH, Mestres PadaWans
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/camps/4.jpg')}}" alt="Quarto slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i> Praça BNH, Batalhas Finais
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/camps/5.jpg')}}" alt="Quinto slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i> Praça BNH, Premiação Segundo lugar
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/camps/6.jpg')}}" alt="Sexto slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i> Praça BNH, Primeira Batalha
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <i class="material-icons">keyboard_arrow_left</i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <i class="material-icons">keyboard_arrow_right</i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Carousel Card -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer id="contact" class="footer footer-default">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.github.com/thobiasvicente">
                            Thobias Vicente
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.github.com/thobiasvicente" target="blank">Thobias Vicente</a> for a better web.
            </div>
        </div>
    </footer>
</body>

</html>