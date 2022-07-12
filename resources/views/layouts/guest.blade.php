<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>GoMobileUX V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('guest/assets') }}/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="{{ asset('guest/assets') }}/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('guest/assets') }}/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- nouislider CSS -->
    <link href="{{ asset('guest/assets') }}/vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('guest/assets') }}/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="{{ asset('guest/assets') }}/css/style-purple.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="home">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap mx-auto">
                    <div class="loader-cube1 loader-cube"></div>
                    <div class="loader-cube2 loader-cube"></div>
                    <div class="loader-cube4 loader-cube"></div>
                    <div class="loader-cube3 loader-cube"></div>
                </div>
                <p>Let's Create Difference<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Sidebar main menu -->
    <div class="sidebar-wrap  sidebar-overlay">
        <!-- Add pushcontent or fullmenu instead overlay -->
        <div class="closemenu text-opac">Close Menu</div>
        <div class="sidebar">
            <div class="row mt-4 mb-3">
                <div class="col-auto">
                    <figure class="avatar avatar-60 rounded mx-auto my-1">
                        <img src="{{ asset('guest/assets') }}/img/user2.jpg" alt="">
                    </figure>
                </div>
                <div class="col align-self-center ps-0">
                    <h6 class="mb-0">Selvy Smith</h6>
                    <p class="text-opac">Australia, UK</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="stats.html">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door"></i></div>
                                <div class="col">Dashboard</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-shop"></i></div>
                                <div class="col">Shop</div>
                                <div class="arrow"><i class="bi bi-plus plus"></i> <i class="bi bi-dash minus"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item nav-link active" href="home.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-bag"></i></div>
                                        <div class="col">Shop home</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="product.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-binoculars"></i>
                                        </div>
                                        <div class="col">Product</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="cart.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-basket3"></i></div>
                                        <div class="col">Cart</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="payment.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-credit-card"></i>
                                        </div>
                                        <div class="col">Payment</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="my-orders.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-seam"></i></div>
                                        <div class="col">My Orders</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="chat.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-chat-text"></i></div>
                                <div class="col">Messages</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="notifications.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-bell"></i></div>
                                <div class="col">Notification</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="settings.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-gear"></i></div>
                                <div class="col">Settings</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-file-earmark-text"></i></div>
                                <div class="col">Pages <span class="badge bg-info fw-light">new</span></div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="signin.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                                <div class="col">Logout</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100 has-header has-footer">

        <!-- Header -->
        <header class="container-fluid header">
            <div class="row">
                <div class="col-auto align-self-center">
                    <button type="button" class="btn btn-link menu-btn text-color-theme">
                        <i class="bi bi-list size-24"></i>
                    </button>
                </div>
                <div class="col text-center">
                    <div class="logo-small">
                        <img src="{{ asset('guest/assets') }}/img/logo.png" alt="" class="img">
                        <h6>GO<br><small>MobileUX</small></h6>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <a href="profile.html" class="link text-color-theme">
                        <i class="bi bi-person-circle size-22"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">

            <!-- search -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control is-valid" id="search" placeholder="Search">
                        <label for="search">Search</label>
                        <button type="button" class="btn btn-link tooltip-btn d-block text-color-theme">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-auto">
                    <button class="btn btn-lg btn-theme shadow-sm filter-btn">
                        <i class="bi bi-filter size-22"></i>
                    </button>
                </div>
            </div>

            <!-- categories -->
            <div class="swiper-container categoriesswiper mb-3">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/berry-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Fruits</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/lemon-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Lemon</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/banana-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Banana</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/apple-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Apple</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/berry-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Fruits</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/lemon-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Lemon</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/banana-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Banana</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/apple-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Apple</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/berry-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Fruits</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/lemon-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Lemon</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/banana-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Banana</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/apple-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Apple</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/berry-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Fruits</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/lemon-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Lemon</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/banana-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Banana</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img src="{{ asset('guest/assets') }}/img/apple-small.png" alt="">
                            </div>
                        </div>
                        <p class="categoryname">Apple</p>
                    </div>
                </div>
            </div>

            <!-- offerslides -->
            <div class="swiper-container offerslides mb-3">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card shadow-sm card-theme">
                            <div class="card-body py-1">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('guest/assets') }}/img/Banner.png" alt="" class="mw-100">
                                    </div>
                                    <div class="col text-start align-self-center ps-0">
                                        <h6 class="fw-normal mb-0">Season Discount</h6>
                                        <h2>50% OFF</h2>
                                        <p>Use Code<br><strong>"SEASON01"</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card shadow-sm card-theme">
                            <div class="card-body py-1">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('guest/assets') }}/img/Banner3.png" alt="" class="mw-100">
                                    </div>
                                    <div class="col text-start align-self-center ps-0">
                                        <h6 class="fw-normal mb-0">Special Discount</h6>
                                        <h2>65% OFF</h2>
                                        <p>Use Code<br><strong>"NEW004"</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card shadow-sm card-theme">
                            <div class="card-body py-1">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('guest/assets') }}/img/Banner2.png" alt="" class="mw-100">
                                    </div>
                                    <div class="col text-start align-self-center ps-0">
                                        <h6 class="fw-normal mb-0">Protein Discount</h6>
                                        <h2>20% OFF</h2>
                                        <p>Use Code<br><strong>"REAL20BK"</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination pagination-offerslides"></div>
            </div>

            <!-- Products -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">Popular</h5>
                </div>
                <div class="col-auto">
                    <a href="" class="link text-color-theme">View All <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>

            <div class="row" id="show_product">

            </div>

            <!-- Categories -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">Are you looking for </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="badge-new me-2 mb-3 shadow-sm">Free Delivery</div>
                    <div class="badge-new active me-2 mb-3 shadow-sm">$ 1.00 - $ 10.00</div>
                    <div class="badge-new me-2 mb-3 shadow-sm">New</div>
                    <div class="badge-new me-2 mb-3 shadow-sm">$ 11.00 - $ 20.00</div>
                    <div class="badge-new me-2 mb-3 shadow-sm">Fresh</div>
                    <div class="badge-new me-2 mb-3 shadow-sm">Protein</div>
                </div>
            </div>

            <!-- trending items -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">Trending Items</h5>
                </div>
            </div>
            <!-- trending -->
            <div class="swiper-container trendingslides">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card shadow-sm product mb-4">
                            <figure class="text-center mb-0 bg-light-warning">
                                <img src="{{ asset('guest/assets') }}/img/product1.png" alt="">
                            </figure>
                            <div class="card-body">
                                <p class="mb-1">
                                    <small class="text-opac">Fresh</small>
                                    <small class="float-end"><span class="text-opac">4.5</span> <i
                                            class="bi bi-star-fill text-warning"></i></small>
                                </p>
                                <a href="product.html" class="text-normal">
                                    <h6 class="text-color-theme">Red Apple</h6>
                                </a>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-0">$12.00<br><small class="text-opac">per 1 kg</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- button counter increamenter-->
                                        <div class="counter-number">
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-dash size-22"></i>
                                            </button>
                                            <span>1</span>
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-plus size-22"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm product mb-4">
                            <figure class="text-center mb-0 bg-light-warning">
                                <img src="{{ asset('guest/assets') }}/img/product2.png" alt="">
                            </figure>
                            <div class="card-body">
                                <p class="mb-1">
                                    <small class="text-opac">Protein</small>
                                    <small class="float-end"><span class="text-opac">4.5</span> <i
                                            class="bi bi-star-fill text-warning"></i></small>
                                </p>
                                <a href="product.html" class="text-normal">
                                    <h6 class="text-color-theme">Best Banana</h6>
                                </a>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-0">$8.00<br><small class="text-opac">per 12 pcs</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- button counter increamenter-->
                                        <div class="counter-number">
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-dash size-22"></i>
                                            </button>
                                            <span>1</span>
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-plus size-22"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm product mb-4">
                            <figure class="text-center mb-0 bg-light-warning">
                                <img src="{{ asset('guest/assets') }}/img/product3.png" alt="">
                            </figure>
                            <div class="card-body">
                                <p class="mb-1">
                                    <small class="text-opac">Fresh</small>
                                    <small class="float-end"><span class="text-opac">4.5</span> <i
                                            class="bi bi-star-fill text-warning"></i></small>
                                </p>
                                <a href="product.html" class="text-normal">
                                    <h6 class="text-color-theme">Watermelon</h6>
                                </a>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-0">$11.00<br><small class="text-opac">per 1 kg</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- button counter increamenter-->
                                        <div class="counter-number">
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-dash size-22"></i>
                                            </button>
                                            <span>1</span>
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-plus size-22"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm product mb-4">
                            <figure class="text-center mb-0 bg-light-warning">
                                <img src="{{ asset('guest/assets') }}/img/product4.png" alt="">
                            </figure>
                            <div class="card-body">
                                <p class="mb-1">
                                    <small class="text-opac">Fresh</small>
                                    <small class="float-end"><span class="text-opac">4.5</span> <i
                                            class="bi bi-star-fill text-warning"></i></small>
                                </p>
                                <a href="product.html" class="text-normal">
                                    <h6 class="text-color-theme">Yellow Lemon</h6>
                                </a>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-0">$8.00<br><small class="text-opac">per 1 kg</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- button counter increamenter-->
                                        <div class="counter-number">
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-dash size-22"></i>
                                            </button>
                                            <span>1</span>
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                                <i class="bi bi-plus size-22"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Near by shops -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">Near by shop</h5>
                </div>
            </div>
            <!-- shop slides -->
            <div class="row">
                <div class="col-12 px-0">
                    <div class="swiper-container shopslides mb-4">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="card shadow-sm ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="text-center mb-0 avatar avatar-60 page-bg rounded">
                                                    <i class="bi bi-shop size-24 text-color-theme"></i>
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="text-normal text-color-theme">
                                                    <h6 class="mb-1">Atlanicaa Food <i
                                                            class="bi bi-arrow-up-right-circle text-color-theme float-end"></i>
                                                    </h6>
                                                </a>
                                                <p class="mb-1">B-49, Feirra Street</p>
                                                <p class="small d-block">
                                                    <span class="text-opac">10:00am - 11:00pm</span>
                                                    <span class="float-end"><span class="text-opac">2.5km</span> <i
                                                            class="bi bi-geo-alt"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="text-center mb-0 avatar avatar-60 page-bg rounded">
                                                    <i class="bi bi-shop size-24 text-color-theme"></i>
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="text-normal text-color-theme">
                                                    <h6 class="mb-1">Milbar Food <i
                                                            class="bi bi-arrow-up-right-circle text-color-theme float-end"></i>
                                                    </h6>
                                                </a>
                                                <p class="mb-1">A-39, Axaar Street</p>
                                                <p class="small d-block">
                                                    <span class="text-opac">10:00am - 11:00pm</span>
                                                    <span class="float-end"><span class="text-opac">2.5km</span> <i
                                                            class="bi bi-geo-alt"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="text-center mb-0 avatar avatar-60 page-bg rounded">
                                                    <i class="bi bi-shop size-24 text-color-theme"></i>
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="text-normal text-color-theme">
                                                    <h6 class="mb-1">Amazon Fresh<i
                                                            class="bi bi-arrow-up-right-circle text-color-theme float-end"></i>
                                                    </h6>
                                                </a>
                                                <p class="mb-1">C-49, Lothal at</p>
                                                <p class="small d-block">
                                                    <span class="text-opac">10:00am - 11:00pm</span>
                                                    <span class="float-end"><span class="text-opac">2.5km</span> <i
                                                            class="bi bi-geo-alt"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- toast messages -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">Helpful actions</h5>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <ul class="list-group list-group-flush bg-none">
                            <li class="list-group-item" id="toastprouctaddedtinybtn">
                                <div class="row gx-3">
                                    <div class="col-auto"><i class="bi bi-check-circle text-color-theme"></i></div>
                                    <div class="col">Product Added Tiny</div>
                                    <div class="col-auto align-self-center">
                                        <i class="bi bi-chevron-right text-opac small"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" id="toastprouctaddedbtn">
                                <div class="row gx-3">
                                    <div class="col-auto"><i class="bi bi-check-circle text-color-theme"></i></div>
                                    <div class="col">Product Added Simple</div>
                                    <div class="col-auto align-self-center">
                                        <i class="bi bi-chevron-right text-opac small"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" id="toastprouctaddedrichbtn">
                                <div class="row gx-3">
                                    <div class="col-auto"><i class="bi bi-check-circle text-color-theme"></i></div>
                                    <div class="col">Product Added Rich</div>
                                    <div class="col-auto align-self-center">
                                        <i class="bi bi-chevron-right text-opac small"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#addproductcart">
                                <div class="row gx-3">
                                    <div class="col-auto"><i class="bi bi-check-circle text-color-theme"></i></div>
                                    <div class="col">Product Added Modal</div>
                                    <div class="col-auto align-self-center">
                                        <i class="bi bi-chevron-right text-opac small"></i>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--News and announcements -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">News and Updates</h5>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-90 coverimg page-bg rounded">
                                        <img src="{{ asset('guest/assets') }}/img/news1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col ps-0">
                                    <p class="small d-block mb-2">
                                        <span class="text-opac">Trend setter</span>
                                        <span class="float-end"><span class="text-opac">26 July 2021</span> <i
                                                class="bi bi-clock"></i></span>
                                    </p>
                                    <a href="#" class="text-normal text-color-theme">
                                        <h6>Best UI UX design with your loving frameworks</h6>
                                    </a>
                                    <div class="mb-1">
                                        <figure class="text-center mb-0 avatar avatar-20 coverimg">
                                            <img src="{{ asset('guest/assets') }}/img/user2.jpg" alt="">
                                        </figure>
                                        Archana Singh
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-90 coverimg page-bg rounded">
                                        <img src="{{ asset('guest/assets') }}/img/news2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col ps-0">
                                    <p class="small d-block mb-2">
                                        <span class="text-opac">ReadOut</span>
                                        <span class="float-end"><span class="text-opac">26 July 2021</span> <i
                                                class="bi bi-clock"></i></span>
                                    </p>
                                    <a href="#" class="text-normal text-color-theme">
                                        <h6>Make a distance from bad design & accept the change</h6>
                                    </a>
                                    <div class="mb-1">
                                        <figure class="text-center mb-0 avatar avatar-20 coverimg">
                                            <img src="{{ asset('guest/assets') }}/img/user1.jpg" alt="">
                                        </figure>
                                        John Doe
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-90 coverimg page-bg rounded">
                                        <img src="{{ asset('guest/assets') }}/img/news3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col ps-0">
                                    <p class="small d-block mb-2">
                                        <span class="text-opac">FoodTechy</span>
                                        <span class="float-end"><span class="text-opac">26 July 2021</span> <i
                                                class="bi bi-clock"></i></span>
                                    </p>
                                    <a href="#" class="text-normal text-color-theme">
                                        <h6>Never regret of buying and trying new things</h6>
                                    </a>
                                    <div class="mb-1">
                                        <figure class="text-center mb-0 avatar avatar-20 coverimg">
                                            <img src="{{ asset('guest/assets') }}/img/user3.jpg" alt="">
                                        </figure>
                                        Laxmisho Johnson
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="home.html">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats.html">
                        <span>
                            <i class="nav-icon bi bi-bar-chart-line"></i>
                            <span class="nav-text">Stats</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item center-item">
                    <a class="nav-link" href="cart.html">
                        <span>
                            <i class="nav-icon bi bi-bag"></i>
                            <span class="nav-text">Cart</span>
                            <span class="countercart">3</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="style.html">
                        <span>
                            <i class="nav-icon bi bi-palette"></i>
                            <span class="nav-text">Style</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.html">
                        <span>
                            <i class="nav-icon bi bi-gear"></i>
                            <span class="nav-text">Settings</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->

    <!-- filter menu -->
    <div class="filter">
        <div class="card shadow h-100">
            <div class="card-header">
                <div class="row">
                    <div class="col align-self-center">
                        <h6 class="mb-0">Filter Criteria</h6>
                        <p class="text-opac">2154 products</p>
                    </div>
                    <div class="col-auto px-0">
                        <button class="btn btn-link text-danger filter-close">
                            <i class="bi bi-x size-22"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body overflow-auto">
                <div class="mb-4">
                    <h6>Select Range</h6>
                    <div id="rangeslider" class="mt-4"></div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" min="0" max="500" value="100" step="1"
                                id="input-select">
                            <label for="input-select">Minimum</label>
                        </div>
                    </div>
                    <div class="col-auto align-self-center"> to </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" min="0" max="500" value="200" step="1"
                                id="input-number">
                            <label for="input-number">Maximum</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-4">
                    <select class="form-control" id="filtertype">
                        <option selected>Cloths</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                    </select>
                    <label for="filtertype">Select Shopping Type</label>
                </div>

                <div class="form-group floating-form-group active mb-4">
                    <h6 class="mb-3">Select Facilities</h6>

                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="men" checked>
                        <label class="form-check-label" for="men">Men</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="woman" checked>
                        <label class="form-check-label" for="woman">Women</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="Sport">
                        <label class="form-check-label" for="Sport">Sport</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="homedecor">
                        <label class="form-check-label" for="homedecor">Home Decor</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="kidsplay">
                        <label class="form-check-label" for="kidsplay">Kid's Play</label>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <label for="input-select">Keyword</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-control" id="discount">
                        <option>10% </option>
                        <option>30%</option>
                        <option>50%</option>
                        <option>80%</option>
                    </select>
                    <label for="discount">Offer Discount</label>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-default w-100 shadow-sm">Search</button>
            </div>
        </div>
    </div>
    <!-- filter menu ends-->

    <!-- event action toast messages -->
    <div class="position-fixed top-0 start-50 translate-middle-x p-3  z-index-999">
        <div id="toastprouctaddedtiny" class="toast bg-primary border-0 shadow hide mb-3" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <div class="row">
                    <div class="col text-white">
                        <p>Your product has been added to cart</p>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="toastprouctadded" class="toast shadow hide mb-3" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto"><i class="bi bi-bag me-1"></i> Congtratulations!!!</strong>
                <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <h6 class="mb-0">Your product has been added to cart</h6>
                <p class="text-opac">This position can be changed and applied as per desired location.</p>
            </div>
        </div>

        <div id="toastprouctaddedrich" class="toast border-0 shadow hide mb-3" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">
                    <i class="bi bi-basket text-color-theme rounded-circle me-1"></i>
                    Product added to cart
                </strong>
                <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div class="row gx-3">
                    <div class="col-auto">
                        <div class="avatar avatar-60 rounded page-bg p-2">
                            <img src="{{ asset('guest/assets') }}/img/product2.png" alt="" class="mw-100">
                        </div>
                    </div>
                    <div class="col align-self-center">
                        <h6 class="mb-1 text-color-theme">Raybans Sunglasses</h6>
                        <p>
                            <span class="text-opac">Delivered on April 12</span>
                            <span class="float-end"><strong>$ 150</strong></span>
                        </p>
                    </div>
                    <div class="col-auto align-self-center">
                        <i class="text-opac bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event action toast messages ends -->

    <!-- add cart modal -->
    <div class="modal fade" id="addproductcart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content product border-0 shadow-sm">
                <figure class="text-center mb-0 px-5 py-3">
                    <img src="{{ asset('guest/assets') }}/img/apple.png" alt="" class="mw-100">
                </figure>
                <div class="modal-body">
                    <p class="mb-1">
                        <small class="text-opac">Fresh</small>
                        <small class="float-end"><span class="text-opac">4.5</span> <i
                                class="bi bi-star-fill text-warning"></i></small>
                    </p>
                    <a href="product.html" class="text-normal">
                        <h6 class="text-color-theme">Red Apple</h6>
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0">$12.00<br><small class="text-opac">per 1 kg</small></p>
                        </div>
                        <div class="col-auto">
                            <!-- button counter increamenter-->
                            <div class="counter-number">
                                <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                    <i class="bi bi-dash size-22"></i>
                                </button>
                                <span>1</span>
                                <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                    <i class="bi bi-plus size-22"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-link text-color-theme" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
    <!-- add cart modal ends -->

    <!-- PWA app install toast message -->
    <div class="position-fixed bottom-0 start-50 translate-middle-x  z-index-9">
        <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall"
            data-bs-animation="true">
            <div class="toast-header">
                <img src="{{ asset('guest/assets') }}/img/favicon32.png" class="rounded me-2" alt="...">
                <strong class="me-auto">Install PWA App</strong>
                <small>now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div class="row">
                    <div class="col">
                        Click "Install" to install PWA app and experience as indepedent app.
                    </div>
                    <div class="col-auto align-self-center">
                        <button class="btn-default btn btn-sm" id="addtohome">Install</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required jquery and libraries -->
    <script src="{{ asset('guest/assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('guest/assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('guest/assets') }}/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{ asset('guest/assets') }}/js/jquery.cookie.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ asset('guest/assets') }}/js/pwa-services.js"></script>

    <!-- swiper script -->
    <script src="{{ asset('guest/assets') }}/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- nouislider js -->
    <script src="{{ asset('guest/assets') }}/vendor/nouislider/nouislider.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{ asset('guest/assets') }}/js/main.js"></script>
    <script src="{{ asset('guest/assets') }}/js/color-scheme.js"></script>

    <!-- page level custom script -->
    <script src="{{ asset('guest/assets') }}/js/app.js"></script>

    <script>
        $('#show_product').append(`
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card shadow-sm product mb-4">
                <div class="card-body">
                    <figure class="text-center">
                        <img src="{{ asset('guest/assets') }}/img/product1.png" alt="">
                    </figure>
                    <p class="mb-1">
                        <small class="text-opac">Fresh</small>
                        <small class="float-end"><span class="text-opac">4.5</span> <i
                                class="bi bi-star-fill text-warning"></i></small>
                    </p>
                    <a href="product.html" class="text-normal">
                        <h6 class="text-color-theme">Red Apple</h6>
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0">$12.00<br><small class="text-opac">per 1 kg</small></p>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle shadow btn-gradient"
                                data-bs-toggle="modal" data-bs-target="#addproductcart">
                                <i class="bi bi-plus size-22"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `);
    </script>
</body>

</html>