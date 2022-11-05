
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <title>Unstack</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('management/img/core-img/favicon.png') }}">

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('management/css/default-assets/mini-event-calendar.min.css') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('management/style.css') }}">

      <link rel="stylesheet" href="{{ asset('management/css/default-assets/modal.css') }}">

</head>
@yield('title')
@yield('styles')
<style>
    [v-cloak]{
        display: none;
    }
</style>

<body class="sidebar-mini">

    <div class="main-container-wrapper">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('user.dashboard')}}"><img src="{{ asset('management/img/core-img/logo.png') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('user.dashboard') }}"><img src="{{ asset('management/img/core-img/small-logo.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>

                <ul class="top-navbar-area navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('management/img/member-img/contact-2.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top" aria-labelledby="profileDropdown">
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon" aria-hidden="true"></i> Settings</a>
                            <a href="{{ route('auth.logout') }}" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i> Sign-out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-layout-grid2"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">

            @include('Includes.sidebar')

            <!-- partial -->
            @yield('content')

        </div>
    </div>





    <script src="{{ asset('management/js/jquery.min.js') }}"></script>
    <script src="{{ asset('management/js/popper.min.js') }}"></script>
    <script src="{{ asset('management/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('management/js/bundle.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/fullscreen.js') }}"></script>

    <script src="{{ asset('management/js/canvas.js') }}"></script>
    <script src="{{ asset('management/js/collapse.js') }}"></script>
    <script src="{{ asset('management/js/settings.js') }}"></script>
    <script src="{{ asset('management/js/template.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/active.js') }}"></script>

    <!-- Inject JS -->
    <script src="{{ asset('management/js/default-assets/mini-event-calendar.min.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/mini-calendar-active.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/apexchart.min.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/dashboard-active.js') }}"></script>



    <!-- Inject JS -->
    <script src="{{ asset('management/js/js/default-assets/modal-classes.js') }}"></script>
    <script src="{{ asset('management/js/js/default-assets/modaleffects.js') }}"></script>

    <script src="{{ asset('library/axios.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
    crossorigin="anonymous"></script>
    @yield('script')

</body>
</html>
