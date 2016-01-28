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
            <div class="container site-header__container">
                <div class="row">
                    <div class="site-header__logo-wrapper">
                        <a href="/" class="site-header__logo">BillApp</a>
                    </div>
                    <nav class="site-nav">
                        <a href="#" class="site-nav__link">Home</a>
                        <a href="#" class="site-nav__link">About</a>
                        <a href="#" class="site-nav__link">Bills</a>
                        <a href="#" class="site-nav__link">Companies</a>
                        <a href="#" class="site-nav__link">Logout</a>
                        <div class="account-utils">
                            <span class="account-utils__image" style="background-image: url('https://pbs.twimg.com/profile_images/562975581235470336/dx0tuhSa.png');"></span>
                            <span class="account-utils__name">Taylor Daughtry</span>
                        </div>
                    </nav>
                </div>
                <div class="homepage-summary">
                    <div class="homepage-summary__row">
                        <div class="half-column">
                            <div class="homepage-summary__row">
                                <div class="number-block -column -white-text">
                                    <span class="number-block__info">% Change</span>
                                    <h2 class="number-block__title">78%</h2>
                                </div>
                                <div class="number-block -column -white-text">
                                    <span class="number-block__info">Net Worth</span>
                                    <h2 class="number-block__title">$1,238.46</h2>
                                </div>
                                <div class="number-block -column">
                                    <span class="number-block__info">Income</span>
                                    <h2 class="number-block__title -credit">$3,425.20</h2>
                                </div>
                                <div class="number-block -column">
                                    <span class="number-block__info">Expenses</span>
                                    <h2 class="number-block__title -debit">$2,580.25</h2>
                                </div>
                            </div>
                        </div>
                        <div class="half-column">
                            <h3 class="homepage-summary__welcome-title">Welcome, Taylor!</h3>
                            <p class="homepage-summary__welcome-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
