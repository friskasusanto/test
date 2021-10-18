<!doctype html>
<html class="no-js" lang="en">

@include('admin.layout.html')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @include('admin.layout.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{asset('backend/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.header')

        @yield('content')

        @include('admin.layout.footer')
    </div>
    <!-- jquery ============================================ -->

    @include('admin.layout.script')
    @yield('script')

    <!-- jquery ============================================ -->

</body>

</html>
