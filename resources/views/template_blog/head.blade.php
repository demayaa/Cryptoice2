<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>{{ config('app.name', 'CryptoICE') }}</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" />
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{asset('public/css/mdb.min.css')}}" />
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}" />
        
    </head>
    <body class="fixed-sn light-blue-skin">
        <!--Double navigation-->
        <header>
            <!-- Sidebar navigation -->
            <div id="slide-out" class="side-nav sn-bg-4 fixed">
                <ul class="custom-scrollbar">
                    <!--Search Form-->
                    <li>
                      <form class="search-form" role="search" action="{{route('blog.cari')}}" method="get">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                          <input type="text" name="cari" class="form-control" placeholder="Search">
                        </div>
                      </form>
                    </li>
                    <!--/.Search Form-->

                    <!-- Side navigation links -->
                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a href="/" class="waves-effect arrow-r"><i class="fas fa-house-damage"></i> Home</a>
                            </li>
                            <li>
                                <a href="/posts/category/airdrop" class="waves-effect arrow-r"><i class="fab fa-phoenix-squadron"></i> Airdrop</a>
                            </li>
                            <li>
                                <a href="/posts/category/news" class="waves-effect arrow-r"><i class="fas fa-newspaper"></i> News</a>
                            </li>
                            <li>
                                <a href="/posts/category/cryptocurrency" class="waves-effect arrow-r"><i class="fab fa-btc"></i> Cryptocurrency</a>
                            </li>
                            <li>
                                <a href="/posts/category/announcement" class="waves-effect arrow-r"><i class="fas fa-bullhorn"></i> Announcement</a>
                            </li>
                            <li>
                                <a href="/contact" class="waves-effect arrow-r"><i class="fas fa-phone-volume"></i> Contact</a>
                            </li>
                            <li>
                                <a href="/about" class="waves-effect arrow-r"><i class="fas fa-phone-volume"></i> about us</a>
                            </li>
                        </ul>
                    </li>
                    <!--/. Side navigation links -->
                </ul>
                <div class="sidenav-bg mask-strong"></div>
            </div>
            <!--/. Sidebar navigation -->
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
                </div>
                <!-- Breadcrumb-->
                <div class="mr-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb clearfix d-md-inline-flex pt-0">
                            <li class="breadcrumb-item"><a class="white-text" href="/">{{ config('app.name', 'CryptoICE') }}</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
            <!-- /.Navbar -->
            <div
                class="jumbotron card card-image mask flex-center waves-effect waves-light rgba-teal-strong"
                style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Wz5fp3YS4qeJMDgut0ulld5qXSJDHfgabw&usqp=CAU);"
            >
                <div class="text-white text-center py-5 px-4">
                    <div>
                        <h2 class="h1-responsive cyan-lighter-hover pt-4 mb-2 font-weight-bold"><strong>Welcome To {{ config('app.name', 'CryptoICE') }} </strong></h2>
                    </div>
                </div>
            </div>
            <div style="margin-top: -30px;">
                <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                <coingecko-coin-price-marquee-widget coin-ids="bitcoin,eos,ethereum,litecoin,ripple,1inch,tron,dogecoin" currency="usd" background-color="#ffffff" locale="id"></coingecko-coin-price-marquee-widget>
            </div>
        </header>
        <!--/.Double navigation-->