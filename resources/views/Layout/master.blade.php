
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <title>Scilabs</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('management/img/core-img/favicon.png') }}">

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('management/css/default-assets/mini-event-calendar.min.css') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('management/style.css') }}">

      <link rel="stylesheet" href="{{ asset('management/css/default-assets/modal.css') }}">

</head>
@yield('title')

<body class="sidebar-mini">

    <div class="main-container-wrapper">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('management/img/core-img/logo.png') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('management/img/core-img/small-logo.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item app-search d-none d-md-block">
                        <form role="search" class=""><input type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="search-btn mr-0"><i class="fa fa-search"></i></button></form>
                    </li>
                </ul>
                <ul class="top-navbar-area navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <img class="mr-2 flex-30-img" src="{{ asset('management/img/shop-img/l5.png') }}" alt="">English<i class="arrow_carrot-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Language</p>

                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="{{ asset('management/img/shop-img/l2.jpg') }}" alt=""> LOP</a>
                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="{{ asset('management/img/shop-img/l3.jpg') }}" alt=""> KYI</a>
                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="{{ asset('management/img/shop-img/l4.jpg') }}" alt=""> RTY</a>
                            <a href="#" class="dropdown-item preview-item d-flex align-items-center"><img class="language-thumb" src="{{ asset('management/img/shop-img/l1.jpg') }}" alt=""> IND</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-primary">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Code problem solved.</h6>
                                    <p class="mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>New theme update.</h6>
                                    <p class="mb-0">
                                        02 days ago
                                    </p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Awsome support.</h6>
                                    <p class="mb-0">
                                        02 days ago
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-danger">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Text to build on the card title.</h6>
                                    <p class="mb-0">
                                        03 days ago
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>

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
            <!-- Side Menu area -->
            @include('Includes.sidebar')

            <!-- partial -->
            @yield('content')

        </div>
    </div>


    <!-- Plugins Js -->



    <script src="{{ asset('management/js/jquery.min.js') }}"></script>
    <script src="{{ asset('management/js/popper.min.js') }}"></script>
    <script src="{{ asset('management/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('management/js/bundle.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/fullscreen.js') }}"></script>

    <!-- Active JS -->
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
