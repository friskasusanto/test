<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="{{asset('backend/image/x-icon')}}" href="{{asset('backend/img/favicon.ico')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/normalize.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/form/all-type-forms.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login" style="margin-top: 30%;">
                    <h3 style="color: #fff;">PLEASE LOGIN TO APP</h3>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">{{ __('E-Mail Address') }}</label>
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-success btn-block loginbtn">{{ __('Login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p style="color: #fff">Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="{{asset('backend/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('backend/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('backend/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('backend/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('backend/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
        ============================================ -->
    <script src="{{asset('backend/js/tab.js')}}"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="{{asset('backend/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('backend/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('backend/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('backend/js/main.js')}}"></script>
</body>

</html>