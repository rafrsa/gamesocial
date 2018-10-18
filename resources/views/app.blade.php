<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from www.spruko.com/demo/viboon/html/Viboon_teal/Horizontal-Light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 14:36:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <title>GameSocial</title>

    <link rel="stylesheet" href="{{ URL::asset('fonts/fonts/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="{{ URL::asset('css/dashboard.css') }}" rel="stylesheet" />

    {{--<link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />--}}
    {{--<link href="assets/plugins/morris/morris.css" rel="stylesheet" />--}}
    <link href="{{ URL::asset('plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('plugins/iconfonts/plugin.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('css/timeline.css') }}" rel="stylesheet" />
</head>
<body class="">
<div id="global-loader" ></div>
<div class="page" >
    <div class="page-main">
        <div class="header py-1">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img src="{{ URL::asset('images/brand/logo.png') }}" class="header-brand-img" alt="Viboon logo">
                    </a>
                    <div class=" ">
                        <form class="input-icon mt-2 ">
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                        </form>
                    </div>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-none d-md-flex mt-1" >
                            <a  class="nav-link icon full-screen-link">
                                <i class="fe fe-maximize floating"  id="fullscreen-button"></i>
                            </a>
                        </div>
                        <div class="dropdown d-none d-md-flex mt-1 country-selector">
                            <a href="#" class="d-flex nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar avatar-sm mr-1 align-self-center" style="background-image: url({{ URL::asset('images/us_flag.jpg') }})"></span>
                                <div>
                                    <strong class="text-white">English</strong>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar  mr-3 align-self-center" style="background-image: url({{ URL::asset('images/french_flag.jpg') }})"></span>

                                    <div>
                                        <strong>French</strong>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar  mr-3 align-self-center" style="background-image: url({{ URL::asset('images/germany_flag.jpg') }})"></span>
                                    <div>
                                        <strong>Germany</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex mt-1">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell floating"></i>
                                <span class="nav-unread bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div>
                                        <strong>Someone likes our posts.</strong>
                                        <div class="small text-muted">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-commenting-o"></i>
                                    </div>
                                    <div>
                                        <strong> 3 New Comments</strong>
                                        <div class="small text-muted">5  hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div>
                                        <strong> Server Rebooted.</strong>
                                        <div class="small text-muted">45 mintues ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all Notification</a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex mt-1">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-mail floating"></i>
                                <span class=" nav-unread badge badge-warning  badge-pill">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item text-center">2 New Messages</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar brround mr-3 align-self-center" style="background-image: url({{ URL::asset('images/faces/male/41.jpg') }})"></span>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar brround mr-3 align-self-center" style="background-image: url({{ URL::asset('images/faces/female/1.jpg') }})"></span>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">5  hour ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">See all Messages</a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex mt-1">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-grid floating"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <ul class="drop-icon-wrap p-1">
                                    <li>
                                        <a href="email.html" class="drop-icon-item">
                                            <i class="fe fe-mail text-dark"></i>
                                            <span class="block"> E-mail</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar2.html" class="drop-icon-item">
                                            <i class="fe fe-calendar text-dark"></i>
                                            <span class="block">calendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps.html" class="drop-icon-item">
                                            <i class="fe fe-map-pin text-dark"></i>
                                            <span class="block">map</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="drop-icon-item">
                                            <i class="fe fe-shopping-cart text-dark"></i>
                                            <span class="block">Cart</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="drop-icon-item">
                                            <i class="fe fe-message-square text-dark"></i>
                                            <span class="block">chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile.html" class="drop-icon-item">
                                            <i class="fe fe-phone-outgoing text-dark"></i>
                                            <span class="block">contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all</a>
                            </div>
                        </div>
                        <div class="dropdown mt-1">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar avatar-md brround" style="background-image: url({{ URL::asset('images/faces/female/25.jpg') }})"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                <div class="text-center">
                                    <a href="#" class="dropdown-item text-center font-weight-sembold user">Jessica Allan</a>
                                    <span class="text-center user-semi-title text-dark">web designer</span>
                                    <div class="dropdown-divider"></div>
                                </div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline "></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                                    <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="login.html">
                                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="admin-navbar" id="headerMenuCollapse">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-home"></i>
                            <span> DASHBOARD</span>
                        </a>
                        {{--<div class="sub-item">--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="index.html">Dashboard 1</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index2.html">Dashboard 2</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index3.html">Dashboard 3</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index4.html">Dashboard 4</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index5.html">Dashboard 5</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div><!-- sub-item -->--}}
                    </li>
                    <li class="nav-item with-sub">
                        <a class="nav-link" href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span></a>
                        <div class="sub-item">
                            <ul>

                                <li>
                                    <a href="chart-chartist.html">Chartjs Charts </a>
                                </li>
                                <li>
                                    <a href="chart-dygraph.html">Dygraph Charts</a>
                                </li>

                                <li>
                                    <a href="chart-am.html">Am Charts</a>
                                </li>
                                <li>
                                    <a href="chart-echart.html">Echart Charts</a>
                                </li>
                                <li>
                                    <a href="chart-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="chart-high.html">High Charts</a>
                                </li>
                                <li>
                                    <a href="chart-nvd3.html">Nvd3 Charts</a>
                                </li>
                                <li>
                                    <a href="chart-morris.html">Morris Charts</a>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">C3 Charts</a>
                                    <ul>
                                        <li>
                                            <a href="charts.html">C3 Bar Charts</a>
                                        </li>
                                        <li>
                                            <a href="chart-line.html">C3 Line Charts</a>
                                        </li>
                                        <li>
                                            <a href="chart-donut.html">C3 Donut Charts</a>
                                        </li>
                                        <li>
                                            <a href="chart-pie.html">C3 Pie charts</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>

                    <li class="nav-item with-sub">
                        <a class="nav-link" href="#"><i class="fa fa-snowflake-o"></i> <span>UI DESIGN</span></a>
                        <div class="sub-item">
                            <ul>
                                <li>
                                    <a href="widgets.html">Widgets</a>
                                </li>

                                <li>
                                    <a href="cards.html">Cards design</a>
                                </li>
                                <li>
                                    <a href="chat.html">Default Chat</a>
                                </li>
                                <li>
                                    <a href="notify.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="sweetalert.html">Sweet alerts</a>
                                </li>
                                <li>
                                    <a href="rangeslider.html">Range slider</a>
                                </li>
                                <li>
                                    <a href="scroll.html">Content Scroll bar</a>
                                </li>
                                <li>
                                    <a href="counters.html">Counters</a>
                                </li>
                                <li>
                                    <a href="time-line.html">Time Line</a>
                                </li>
                                <li>
                                    <a href="rating.html">Rating </a>
                                </li>
                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                    <li class="nav-item with-sub mega-dropdown">
                        <a class="nav-link" href="#"><i class="fa fa-pencil-square-o"></i><span>UI ELEMENTS</span></a>
                        <div class="sub-item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="section-label">Basic Elements</label>
                                    <div class="row">
                                        <div class="col">
                                            <ul>
                                                <li>
                                                    <a href="alerts.html">Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="buttons.html">Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="colors.html">Colors</a>
                                                </li>
                                                <li>
                                                    <a href="avatars.html">Avatar-Square</a>
                                                </li>
                                                <li>
                                                    <a href="avatar-round.html">Avatar-Rounded</a>
                                                </li>
                                                <li>
                                                    <a href="avatar-radius.html">Avatar-Radius</a>
                                                </li>
                                                <li>
                                                    <a href="dropdown.html">Drop downs</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-lg">
                                            <ul>
                                                <li>
                                                    <a href="list.html">List</a>
                                                </li>
                                                <li>
                                                    <a href="tags.html">Tags</a>
                                                </li>
                                                <li>
                                                    <a href="pagination.html">Pagination</a>
                                                </li>
                                                <li>
                                                    <a href="navigation.html">Navigation</a>
                                                </li>
                                                <li>
                                                    <a href="typography.html">Typography</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs.html">Breadcrumbs</a>
                                                </li>
                                                <li>
                                                    <a href="badge.html">Badges</a>
                                                </li>

                                            </ul>
                                        </div><!-- col -->
                                        <div class="col-lg mg-t-30 mg-lg-t-0">
                                            <ul>
                                                <li>
                                                    <a href="jumbotron.html">Jumbotron</a>
                                                </li>
                                                <li>
                                                    <a href="panels.html">Panels</a>
                                                </li>
                                                <li>
                                                    <a href="thumbnails.html">Thumbnails</a>
                                                </li>
                                                <li>
                                                    <a href="mediaobject.html">Media Object</a>
                                                </li>
                                                <li>
                                                    <a href="accordion.html">Accordions</a>
                                                </li>
                                                <li>
                                                    <a href="tabs.html">Tabs</a>
                                                </li>
                                                <li>
                                                    <a href="chart.html">Charts</a>
                                                </li>
                                            </ul>
                                        </div><!-- col -->
                                        <div class="col-lg mg-t-30 mg-lg-t-0">
                                            <ul>
                                                <li>
                                                    <a href="modal.html">Modal</a>
                                                </li>
                                                <li>
                                                    <a href="tooltipandpopover.html">Tooltip and popover</a>
                                                </li>
                                                <li>
                                                    <a href="progress.html">Progress</a>
                                                </li>

                                                <li>
                                                    <a href="carousel.html">Carousels</a>
                                                </li>

                                                <li>
                                                    <a href="headers.html">Headers  </a>
                                                </li>
                                                <li>
                                                    <a href="footers.html">Footers  </a>
                                                </li>
                                                <li>
                                                    <a href="loaders.html">Loaders</a>
                                                </li>
                                            </ul>
                                        </div><!-- col -->

                                    </div><!-- row -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                    <li class="nav-item with-sub">
                        <a class="nav-link" href="#"><i class="fa fa-newspaper-o"></i><span>Pages</span></a>
                        <div class="sub-item">
                            <ul>
                                <li class="sub-with-sub">
                                    <a href="#">Profile </a>
                                    <ul>
                                        <li>
                                            <a href="profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a href="editprofile.html">Edit Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">Email </a>
                                    <ul>
                                        <li>
                                            <a href="email.html">Email</a>
                                        </li>
                                        <li>
                                            <a href="emailservices.html">Email Inbox</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">E-commerce </a>
                                    <ul>
                                        <li>
                                            <a href="shop.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="shop-des.html">Product Details</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping Cart</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">User Pages</a>
                                    <ul>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="forgot-password.html">Forgot password</a>
                                        </li>
                                        <li>
                                            <a href="lockscreen.html">Lock screen</a>
                                        </li>
                                        <li>
                                            <a href="empty.html">Empty Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="construction.html">Under Construction</a>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="about.html">About Company </a>
                                </li>
                                <li>
                                    <a href="company-history.html">Company History </a>
                                </li>
                                <li>
                                    <a href="services.html">Services </a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQS </a>
                                </li>
                                <li>
                                    <a href="terms.html">Terms</a>
                                </li>
                                <li>
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">Error Pages</a>
                                    <ul>
                                        <li>
                                            <a href="400.html">400 Error</a>
                                        </li>
                                        <li>
                                            <a href="401.html">401 Error</a>
                                        </li>
                                        <li>
                                            <a href="403.html">403 Error</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404 Error</a>
                                        </li>
                                        <li>
                                            <a href="500.html">500 Error</a>
                                        </li>
                                        <li>
                                            <a href="503.html">503 Error</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                    <li class="nav-item with-sub">
                        <a class="nav-link" data-toggle="dropdown" href="#"><i class="fa fa-file-text-o"></i> <span>Forms</span></a>
                        <div class="sub-item">
                            <ul>
                                <li>
                                    <a href="form-elements.html">Form Elements</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">wizard Elements</a>
                                </li>
                                <li>
                                    <a href="wysiwyag.html">Text Editor</a>
                                </li>

                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                    <li class="nav-item with-sub ">
                        <a class="nav-link " data-toggle="dropdown" href="#"><i class="fa fa-cubes"></i> <span>COMPONENTS</span></a>
                        <div class="sub-item">
                            <ul>
                                <li>
                                    <a href="maps.html">Maps</a>
                                </li>
                                <li>
                                    <a href="crypto-currencies.html">Crypto-currencies</a>
                                </li>
                                <li>
                                    <a href="users-list.html">User List</a>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">Calendar </a>
                                    <ul>
                                        <li>
                                            <a href="calendar.html">Default calendar</a>
                                        </li>
                                        <li>
                                            <a href="calendar2.html">Full calendar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-with-sub">
                                    <a href="#">Tables</a>
                                    <ul>
                                        <li>
                                            <a href="tables.html">Default table</a>
                                        </li>
                                        <li>
                                            <a href="datatable.html">Data Table</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="search.html">Search page</a>
                                </li>

                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                    <li class="nav-item with-sub">
                        <a class="nav-link" data-toggle="dropdown" href="#"><i class="fa fa-bandcamp"></i> <span>Icons</span></a>
                        <div class="sub-item">
                            <ul>
                                <li>
                                    <a href="icons.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="icons2.html">Material Design Icons</a>
                                </li>
                                <li>
                                    <a href="icons3.html">Simple Line Iocns</a>
                                </li>
                                <li>
                                    <a href="icons4.html">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons5.html">Ionic Icons</a>
                                </li>
                                <li>
                                    <a href="icons6.html">Flag Icons</a>
                                </li>
                                <li>
                                    <a href="icons7.html">pe7 Icons</a>
                                </li>
                                <li>
                                    <a href="icons8.html">Themify Icons</a>
                                </li>
                                <li>
                                    <a href="icons9.html">Typicons Icons</a>
                                </li>
                                <li>
                                    <a href="icons10.html">Weather Icons</a>
                                </li>
                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                </ul>
            </div>
        </div>
        <div class="my-3 my-md-5" id="timeline-content">
            @include('timeline')
        </div>
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href="#">Rafael</a>. Designed by <a href="#">Rafael</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->

<script src="{{ URL::asset('js/vendors/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('js/vendors/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('js/vendors/selectize.min.js') }}"></script>
<script src="{{ URL::asset('js/vendors/jquery.tablesorter.min.js') }}"></script>
<script src="{{ URL::asset('js/vendors/circle-progress.min.js') }}"></script>

<script src="{{ URL::asset('plugins/rating/jquery.rating-stars.js') }}"></script>

<script src="{{ URL::asset('js/index1.js') }}"></script>

{{--<script src="assets/plugins/echarts/echarts.js"></script>--}}
<!--Morris.js Charts Plugin -->
{{--<script src="assets/plugins/am-chart/amcharts.js"></script>--}}
{{--<script src="assets/plugins/am-chart/serial.js"></script>--}}

<script src="{{ URL::asset('plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<script src="{{ URL::asset('js/custom.js') }}"></script>

<script src="{{ URL::asset('js/login.js') }}"></script>

</body>
</html>
