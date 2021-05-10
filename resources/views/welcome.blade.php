<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Deducation</title>

        <!-- Bootstrap CSS -->
        <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}"/>

    </head>
    <body class="antialiased">

        {{--  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>  --}}

        {{--  <!-- navbar -->  --}}
        <div class="container my-4">
        @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent">
            <div class="container-fluid">
                {{--  welcome  --}}
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/welcome/logo.png')}}" alt="logo_deducation" width="318" height="60" srcset="" />
                    <span>D<span>EDU</span>CATION</span>
                </a>
                {{--  akhir welcome  --}}

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                @auth {{-- di dalam auth tidak ditampilkan--}}
                        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>  --}}
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary sign-up-btn" href="{{ route('register') }}">Sing Up</a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link btn btn-primary sign-up-btn" href="#">Sing Up</a>
                    </li>  --}}
                    @endif
                    </ul>
                </div>
                @endauth
                </div>
            </nav>
        @endif
        </div>
        {{--  <!-- akhir navbar -->  --}}

        {{--  <!-- konten -->  --}}
        <div class="container">
        <div class="row custom-content">
            <div class="col-12 col-lg-4">
            <h2>EDU DONATION</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum nostrum nesciunt ullam quibusdam incidunt.</p>
            <a href="#">Get Started</a>
            </div>
        </div>
        </div>
        {{--  <!-- akhir konten -->  --}}


        {{-- Our services --}}
        <div class="container">
            <section>
                <h2 class="section-title">Our services</h2>
                <span class="section-line"></span>
                <p class="text-center w-75 mx-auto section-text"> <!-- with 75 % dengan margin horizontal auto (untuk ketengah) -->
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                </p>

                {{-- services card --}}
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-4"> <!-- jika pada tablet 2 kolom jika pada desktop 3 kolom-->
                        <div class="card service-card">
                            <div class="service-card__img">
                                <img src="{{asset('front/img/our_service_1.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-tittle">judul 1</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-4"> <!-- jika pada tablet 2 kolom jika pada desktop 3 kolom-->
                        <div class="card service-card">
                            <div class="service-card__img">
                                <img src="{{asset('front/img/our_service_2.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-tittle">judul 2</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-4"> <!-- jika pada tablet 2 kolom jika pada desktop 3 kolom-->
                        <div class="card service-card">
                            <div class="service-card__img">
                                <img src="{{asset('front/img/our_service_3.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-tittle">judul 3</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-4"> <!-- jika pada tablet 2 kolom jika pada desktop 3 kolom-->
                        <div class="card service-card">
                            <div class="service-card__img">
                                <img src="{{asset('front/img/our_service_4.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-tittle">judul 4</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-4"> <!-- jika pada tablet 2 kolom jika pada desktop 3 kolom-->
                        <div class="card service-card">
                            <div class="service-card__img">
                                <img src="{{asset('front/img/our_service_5.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-tittle">judul 5</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-4"> <!-- jika pada tablet 2 kolom jika pada desktop 3 kolom-->
                        <div class="card service-card">
                            <div class="service-card__img">
                                <img src="{{asset('front/img/our_service_6.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-tittle">judul 6</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
                {{-- end services card --}}
                <div class="btn-center">
                    <a href="#" class=" btn section-button">Learn more..</a>
                </div>
            </section>
        </div>
        {{-- ourservices --}}

        {{-- feature section --}}
        <div class="container">
            <div class="row justify-content-between align-items-center my-5">
                {{-- feature section 1st --}}
                <div class="col-md-6 col-lg-5"> <!-- jika pada tablet 2 kolom, jika pada desktop 2 kolom dengan jarak agak jauh-->
                    <div class="feature-img">
                        <img src="{{asset('img/welcome/ilustrasi-section3.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5"> <!-- jika pada tablet 2 kolom, jika pada desktop 2 kolom dengan jarak agak jauh-->
                    <div class="feature-detail">
                        <h2 class="feature-title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, laboriosam.
                        </h2>
                        <p class="text-justify feature-text ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                        </p>
                        <div class="btn-left">
                            <a href="#" class="btn feature-button">
                                Learn more..
                            </a>
                        </div>
                    </div>
                </div>

                {{-- feature section 2nd --}}
                <div class="col-md-6 col-lg-5"> <!-- jika pada tablet 2 kolom, jika pada desktop 2 kolom dengan jarak agak jauh-->
                    <div class="feature-detail">
                        <h2 class="feature-title">
                            Lorem ipsum dolor sit amet.
                        </h2>
                        <p class="text-justify feature-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                        </p>
                        <div class="btn-left">
                            <a href="#" class="btn feature-button">
                                Learn more..
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 "> <!-- jika pada tablet 2 kolom, jika pada desktop 2 kolom dengan jarak agak jauh-->
                    <div class="feature-img">
                        <img src="{{asset('img/welcome/ilustrasi-section3-2.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- feature section --}}

        {{-- article section --}}
        <div class="container">
            <section>
                <h2 class="section-title">Check our latest article</h2>
                <span class="section-line"></span>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="card article-card">
                            <img src="{{asset('front/img/section4_1.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna ....</p>
                                <a href="#" class="link-article">Read more..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card article-card">
                            <img src="{{asset('front/img/section4_2.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna ....</p>
                                <a href="#" class="link-article">Read more..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card article-card">
                            <img src="{{asset('front/img/section4_3.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet. </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna ....</p>
                                <a href="#" class="link-article">Read more..</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-center">
                    <a href="#" class="btn article-button">
                        view all
                    </a>
                </div>
            </section>
        </div>
        {{-- end article section --}}

        {{-- footer --}}
        <footer>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-4">
                        <div class="footer-about">
                            <img src="{{asset('front/img/logo-litportal-no bg 2.png')}}" class="footer-about__img" alt="">
                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
                            </p>
                            <p>©Litportal 2021</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <p class="footer-title">Company</p>
                        <ul>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <p class="footer-title">Company</p>
                        <ul>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <p class="footer-title">Company</p>
                        <ul>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        {{--  akhir footer  --}}

        {{-- < !-- Option 1: Bootstrap Bundle with Popper -->  --}}
        <script src="{{asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        {{--  <!-- Option 2: Separate Popper and Bootstrap JS -->  --}}
    </body>
</html>
