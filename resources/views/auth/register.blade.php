<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    {{-- sass --}}
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
            <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 my-5 custom-card ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block custom-login-image">
                                <img src="{{asset('img/auth/login.png')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5 mt-5">
                                    <div class="text-left">
                                        <h1 class="h4 text-gray-900">Welcome to <span>Deducation</span></h1>
                                        <p class="mb-4">Create to your account</p>
                                    </div>

                                    <form method="POST" action="{{ route('register') }} class="register">
                                        @csrf

                                        <div class="form-group">
                                            <input id="name" placeholder="Name" type="text" class="form-control form-control-register @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-register"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
                                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-register"
                                                id="exampleInputPassword" placeholder="Password"
                                                @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control form-control-register" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirm password">
                                        </div>

                                        <div class="form-group row">
                                            <div class="">
                                                <button type="submit" class="btn form-control-btn">
                                                    {{ __('Register') }}
                                                </button>

                                            </div>
                                        </div>
                                    </form>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Login to your account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
</html>
