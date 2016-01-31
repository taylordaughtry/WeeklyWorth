<!doctype html>
<html lang="en" id="global" itemscope itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WeeklyWorth</title>
        <meta name="description" content="Blueprint for modern web development.">

        <link rel="stylesheet" href="/assets/css/style.min.css">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300,400italic,600' rel='stylesheet' type='text/css'>

        <link rel="apple-touch-icon" href="/assets/img/icons/touch.png">
        <link rel="mask-icon" href="/assets/img/icons/pin.svg" color="#349bb9">
        <link rel="publisher" href="https://plus.google.com/+weecss">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@weecss">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Wee">
        <meta property="og:title" content="Front-End Framework" itemprop="name">
        <meta property="og:description" content="Blueprint for modern web development." itemprop="description">
        <meta property="og:url" content="https://www.weepower.com" itemprop="url">
        <meta property="og:image" content="https://www.weepower.com/assets/img/share.png" itemprop="image">

        <!--[if lte IE 9]>
        <script src="/assets/js/ie9.min.js"></script>
        <![endif]-->
        <!-- TODO: Move this to the appropriate location -->
        <!-- <script src="http://code.highcharts.com/highcharts.js"></script> -->
    </head>
    <body>
        <header class="site-header">
            <div class="container">
                <span class="site-header__tagline">Weekly Worth</span>
                <div class="account-utils">
                    <span class="account-utils__image"></span>
                    <span class="account-utils__name">Taylor</span>
                </div>
            </div>
        </header>
        <div class="location-bar">
            <div class="container">
                <span class="location-bar__current-page">Dashboard</span>
                <span class="location-bar__net-worth">$2,405.29</span>
            </div>
        </div>
        <div class="tabs-bar">
            <div class="container">
                <ul class="tabs-bar__list">
                    <li class="tabs-bar__item"><a href="{{ route('home') }}" class="tabs-bar__link">Home</a></li>
                    <li class="tabs-bar__item">
                        <a href="{{ URL::to('income') }}" class="tabs-bar__link">Income</a>
                        <div class="tabs-bar__dropdown">
                            <a href="{{ URL::to('income/create') }}" class="tabs-bar__link tabs-bar__sublink">Add Source</a>
                        </div>
                    </li>
                    <li class="tabs-bar__item">
                        <a href="{{ URL::to('expense') }}" class="tabs-bar__link">Expenses</a>
                        <div class="tabs-bar__dropdown">
                            <a href="{{ URL::to('expense/create') }}" class="tabs-bar__link tabs-bar__sublink">Add Expense</a>
                        </div>
                    </li>
                    <li class="tabs-bar__item"><a href="#" class="tabs-bar__link">Payees</a></li>
                    <li class="tabs-bar__item"><a href="#" class="tabs-bar__link">Settings</a></li>
                    <span class="tabs-bar__delta">Net Worth Change: 7.5%</span>
                </ul>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <footer class="site-footer">
            <div class="container site-footer__container">
                <div class="site-footer__row">
                    <div class="site-footer__wide">
                        <span class="site-footer__copyright">WeeklyWorth is &copy; 2016 Taylor Daughtry, All Rights Reserved.</span>
                    </div>
                    <div class="site-footer__thin">
                        <nav>
                            <a href="#" class="site-footer__link">About</a>
                            <a href="#" class="site-footer__link">Security</a>
                            <a href="#" class="site-footer__link">Settings</a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>

<script src="/assets/js/script.min.js"></script>
</body>
</html>