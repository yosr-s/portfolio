<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Mar 2022 18:23:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{url('login1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login1/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login1/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login1/css/iofrm-theme6.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                <img class="logo-size" src="" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                <img src="{{url('login1/images/graphic2.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Welcome back!</h3>
                        <p>Log in to your account.</p>
                        <div class="page-links">
                            <a href="login6.html" class="active">Login</a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{url('login1/js/jquery.min.js')}}"></script>
<script src="{{url('login1/js/popper.min.js')}}"></script>
<script src="{{url('login1/js/bootstrap.min.js')}}"></script>
<script src="{{url('login1/js/main.js')}}"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Mar 2022 18:23:50 GMT -->
</html>