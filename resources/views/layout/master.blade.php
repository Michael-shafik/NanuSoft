<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codedthemes.com/demos/admin-templates/flash-able/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 May 2021 14:31:39 GMT -->

<head>

    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="https://codedthemes.com/demos/admin-templates/flash-able/bootstrap/assets/images/favicon.ico"
        type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{url('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{url('assets/plugins/animation/css/animate.min.css')}}">


    <!-- notification css -->
    <link rel="stylesheet" href="{{url('assets/plugins/notification/css/notification.min.css')}}">
    <!-- data tables css -->
    <link rel="stylesheet" href="{{url('assets/plugins/data-tables/css/datatables.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    @yield('links')
    <!-- RTL layouts -->
    {{-- <link rel="stylesheet" href="../assets/css/layouts/rtl.css"> --}}



</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
        <div class="navbar-wrapper ">
            <div class="navbar-brand header-logo">
                <a href="index.php" class="b-brand">
                    <!-- <div class="b-bg">
                    <i class="fas fa-bolt"></i>
                </div>
                <span class="b-title">Flash Able</span> -->
                    <img src="https://codedthemes.com/demos/admin-templates/flash-able/bootstrap/assets/images/logo.svg"
                        alt="" class="logo images">
                    <img src="https://codedthemes.com/demos/admin-templates/flash-able/bootstrap/assets/images/logo-icon.svg"
                        alt="" class="logo-thumb images">
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">



                <ul class="nav pcoded-inner-navbar ">
                    {{-- <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li> --}}
                    {{-- <li data-username="dashboard default " class="nav-item ">
                        <a href="index.php" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li> --}}
                    <li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-users"></i></span><span class="pcoded-mtext">Home
                                page</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Home/Home')}}" class="">Home page</a> </li>
                        </ul>

                    </li>
                    <li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-users"></i></span><span class="pcoded-mtext">About US</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('About/About_US')}}" class="">About US</a> </li>
                        </ul>

                    </li>
                    <li data-username="contacts box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-phone-call"></i></span><span class="pcoded-mtext">Contact
                                US</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Contact/Contact_US')}}" class="">Contact US </a> </li>
                        </ul>
                    </li>

                    <li data-username="keywords box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-keyboard"></i></span><span class="pcoded-mtext">Testmonials</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Testmonials/Testmonials')}}" class="">Testmonials</a>
                            </li>
                        </ul>
                    </li>
                    <li data-username="keywords box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-keyboard"></i></span><span class="pcoded-mtext">Projects</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Latest_Projects/Latest_Projects')}}" class="">latest
                                    projects</a> </li>
                            <li class="pcoded"><a href="{{url('Project_items/Project_items')}}" class=""> project
                                    items</a> </li>
                        </ul>
                    </li>
                    <li data-username="api box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-globe"></i></span><span class="pcoded-mtext"> Company
                                data</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Company/Company_info')}}" class=""> Company data</a>
                            </li>
                        </ul>
                    </li>
                    <li data-username="ticket box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-ticket-alt"></i></span><span class="pcoded-mtext">News
                                letter</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('News_letter/News_letter')}}" class="">News letter</a>
                            </li>
                        </ul>
                    </li>
                    <li data-username="Recharge box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-cart-plus"></i></span><span class="pcoded-mtext">Services</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Services/Services')}}" class="">Services </a> </li>
                            <li class="pcoded"><a href="{{url('Services_Items/Services_Items')}}" class="">Services
                                    items</a> </li>
                            <li class="pcoded"><a href="{{url('Services_benfits/Services_benfits')}}" class="">Services
                                    penfits</a> </li>
                        </ul>
                    </li>
                    <li data-username="Recharge box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-cart-plus"></i></span><span class="pcoded-mtext">packages</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Packages/Packages')}}" class="">packages </a> </li>
                            <li class="pcoded"><a href="{{url('Packages_Feature/Packages_Feature')}}" class="">packages
                                    Featcher</a> </li>
                        </ul>
                    </li>
                    <li data-username="Recharge box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-cart-plus"></i></span><span class="pcoded-mtext">Catageores</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Catageores/Catageores')}}" class="">Catageores </a> </li>
                        </ul>
                    </li>
                    <li data-username="Recharge box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-cart-plus"></i></span><span class="pcoded-mtext">Products</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Products/Products')}}" class="">Products </a> </li>
                            <li class="pcoded"><a href="{{url('Products_Items/Products_Items')}}" class="">Products
                                    Items</a> </li>
                        </ul>
                    </li>
                    <li data-username="Recharge box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-cart-plus"></i></span><span class="pcoded-mtext">Owl
                                Carousel</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('OwlCarousel/OwlCarousel')}}" class="">Owl Carousel </a>
                            </li>

                        </ul>
                    </li>
                    <li data-username="Recharge box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-cart-plus"></i></span><span
                                class="pcoded-mtext">Models_Works</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded"><a href="{{url('Models_Works/Models_Works')}}" class=""> Models_Works
                                </a>
                            </li>

                        </ul>
                    </li>


                </ul>





            </div>

        </div>
    </nav>
    <!-- [ navigation menu ] end -->



    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">

        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.php" class="b-brand">
                <!-- <div class="b-bg">
                <i class="fas fa-bolt"></i>
            </div>
            <span class="b-title">Flash Able</span> -->
                <img src="https://codedthemes.com/demos/admin-templates/flash-able/bootstrap/assets/images/logo.svg"
                    alt="" class="logo images">
                <img src="https://codedthemes.com/demos/admin-templates/flash-able/bootstrap/assets/images/logo-icon.svg"
                    alt="" class="logo-thumb images">
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        {{-- <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="main-search open">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="../assets/images/user/avatar-1.jpg" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Settings</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a>
                                </li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                                        Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i>
                                        Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div> --}}

    </header>
    {{--end  header--}}
    @yield('content')







    {{--footer--}}

    <!-- [ Main Content ] end -->
    <!-- [ Main Content ] end -->

    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{url('assets/images/browser/chrome.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{url('assets/images/browser/firefox.png')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{url('assets/images/browser/opera.png')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{url('assets/images/browser/safari.png')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{url('assets/images/browser/ie.png')}}" alt="">
                    <div>IE (11 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{url('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/pcoded.min.js')}}"></script>




    <!-- am chart js -->
    <script src="{{url('assets/plugins/chart-am4/js/core.js')}}"></script>
    <script src="{{url('assets/plugins/chart-am4/js/charts.js')}}"></script>
    <script src="{{url('assets/plugins/chart-am4/js/animated.js')}}"></script>
    <script src="{{url('assets/plugins/chart-am4/js/maps.js')}}"></script>
    <script src="{{url('assets/plugins/chart-am4/js/worldLow.js')}}"></script>
    <script src="{{url('assets/plugins/chart-am4/js/continentsLow.js')}}"></script>





    <!-- dashboard-custom js -->
    <script src="{{url('assets/js/pages/dashboard-analytics.js')}}"></script>

    <!-- datatable Js -->
    <script src="{{url('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
    <script src="{{url('assets/js/pages/data-basic-custom.js')}}"></script>
    <script src="{{url('assets/js/pages/data-advance-custom.js')}}"></script>

    <!--Ck Editor For Text Area-->
    <script src="{{url('assets/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.config.language =  "en";
    </script>

    <script src="{{url('assets/js/main.js')}}"></script>
    @yield('script')

</body>

</html>
