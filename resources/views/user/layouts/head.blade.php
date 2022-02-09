<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meranda &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/resouce/meranda-master/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/jquery-ui.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/resouce/meranda-master/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/aos.css">
    <link href="/resouce/meranda-master/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/style.css">


</head>

<body>
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 d-flex">
                        <a href="{{ route('home.index') }}" class="site-logo">
                            Meranda
                        </a>
                        <a href="#"
                            class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>

                    </div>
                    <div class="col-12 col-lg-4 ml-auto d-flex">

                        <form action="{{ route('home.search') }}" method="GET" class="search-form d-inline-block">
                            <div class="input-group">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="{{ __('messages.search') }}" value="{{ $searchKeyWord }}">
                                        <button type="submit" class="btn btn-secondary"><span
                                                class="icon-search"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                            @endif
                            @endforeach
                        </div>
                    </li>
                    <div class="col-6 d-block d-lg-none text-right">

                    </div>
                </div>
            </div>

            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    @foreach ($categoriesWithChildren->slice(0, 8) as $category)
                                    <li class="active">
                                        @if (!$category['children']->isEmpty())
                                        <div class="dropdown ml-5">
                                            <a class="nav-link text-left"
                                                href="{{ route('userCategory.showCategory', $category->id) }}">
                                                {{ $category->name }}</a>
                                            <div class="dropdown-menu">
                                                @foreach ($category->children as $chil)
                                                <a class="dropdown-item "
                                                    href="{{ route('userCategory.show', $chil->id) }}">{{ $chil->name }}<span
                                                        class="caret"></span></a>

                                                @endforeach
                                            </div>
                                        </div>
                                        @else
                                        <div class="ml-5">
                                            <a style="color:black" ,="nav-link text-left"
                                                href="{{ route('userCategory.showCategory', $category->id) }}">
                                                {{ $category->name }}</a>
                                        </div>
                                        @endif

                                    </li>
                                    @endforeach
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>

            </div>
            @yield('content')
</body>

<script src="/resouce/meranda-master/js/jquery-3.3.1.min.js"></script>
<script src="/resouce/meranda-master/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/resouce/meranda-master/js/jquery-ui.js"></script>
<script src="/resouce/meranda-master/js/popper.min.js"></script>
<script src="/resouce/meranda-master/js/bootstrap.min.js"></script>
<script src="/resouce/meranda-master/js/owl.carousel.min.js"></script>
<script src="/resouce/meranda-master/js/jquery.stellar.min.js"></script>
<script src="/resouce/meranda-master/js/jquery.countdown.min.js"></script>
<script src="/resouce/meranda-master/js/bootstrap-datepicker.min.js"></script>
<script src="/resouce/meranda-master/js/jquery.easing.1.3.js"></script>
<script src="/resouce/meranda-master/js/aos.js"></script>
<script src="/resouce/meranda-master/js/jquery.fancybox.min.js"></script>
<script src="/resouce/meranda-master/js/jquery.sticky.js"></script>
<script src="/resouce/meranda-master/js/jquery.mb.YTPlayer.min.js"></script>
<script src="/resouce/meranda-master/js/main.js"></script>

</html>