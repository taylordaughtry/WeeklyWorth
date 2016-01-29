<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="/assets/css/style.min.css">
        <script type="text/css" src="/assets/js/script.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300,400italic,600' rel='stylesheet' type='text/css'>
        <!-- TODO: Move this to the appropriate location -->
        <script src="http://code.highcharts.com/highcharts.js"></script>
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
                <a href="{{ route('home') }}" class="tabs-bar__link">Home</a>
                <a href="{{ URL::to('income') }}" class="tabs-bar__link">Income</a>
                <a href="#" class="tabs-bar__link">Expenses</a>
                <a href="#" class="tabs-bar__link">Payees</a>
                <a href="#" class="tabs-bar__link">Settings</a>
                <span class="tabs-bar__delta">Net Worth Change: 7.5%</span>
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
    </body>
</html>
