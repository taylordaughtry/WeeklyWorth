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
                <a href="/" class="tabs-bar__link">Home</a>
                <a href="#" class="tabs-bar__link">Income</a>
                <a href="#" class="tabs-bar__link">Expenses</a>
                <a href="#" class="tabs-bar__link">Payees</a>
                <a href="#" class="tabs-bar__link">Settings</a>
                <span class="tabs-bar__delta">Net Worth Change: 7.5%</span>
            </div>
        </div>
        <div class="container">
            <div class="homepage-summary">
                <div class="default-row">
                    <div class="number-block">
                        <span class="number-block__caption">This Week's Worth</span>
                        <h1 class="number-block__title">$2,405.29</h1>
                    </div>
                    <div class="number-block">
                        <span class="number-block__caption">This Week's Income</span>
                        <h1 class="number-block__title -credit">$1,980.67</h1>
                    </div>
                    <div class="number-block">
                        <span class="number-block__caption">This Week's Expenses</span>
                        <h1 class="number-block__title -debit">$1,320.46</h1>
                    </div>
                </div>
            </div>
            <div class="default-row">
                <div class="top-expenses">
                    <span class="top-expenses__title">Top Expenses</span>
                    <ul class="top-expenses__list">
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Rent <span class="tag -is-fixed">Fixed</span></span>
                            <span class="top-expenses__amount">$1,200.00</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Electricity <span class="tag -is-variable">Variable</span></span>
                            <span class="top-expenses__amount">$364.20</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Internet/Cable <span class="tag -is-fixed">Fixed</span></span>
                            <span class="top-expenses__amount">$246.35</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Phone <span class="tag -is-fixed">Fixed</span></span>
                            <span class="top-expenses__amount">$23.36</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Car Loan <span class="tag -is-fixed">Fixed</span></span>
                            <span class="top-expenses__amount">$579.02</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Water <span class="tag -is-variable">Variable</span></span></span>
                            <span class="top-expenses__amount">$79.61</span>
                        </li>
                    </ul>
                </div>
                <div class="top-expenses">
                    <span class="top-expenses__title">Top Income</span>
                    <ul class="top-expenses__list">
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Paycheck <span class="tag -is-fixed">Fixed</span></span>
                            <span class="top-expenses__amount">$1,773.23</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Amazon <span class="tag -is-variable">Variable</span></span>
                            <span class="top-expenses__amount">$211.21</span>
                        </li>
                        <li class="top-expenses__item">
                            <span class="top-expenses__expense">Elemental <span class="tag -is-variable">Variable</span></span>
                            <span class="top-expenses__amount">$386.29</span>
                        </li>
                    </ul>
                </div>
            </div>
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
