<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Web App Freelancer, Laravel, Codeigniter, Raw PHP, Ionic, Ionicframework, Angularjs, Javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Web App Freelancer</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
            <!-- Add spacer, to align navigation to the right in desktop -->
            <div class="android-header-spacer mdl-layout-spacer"></div>

            <!-- Navigation -->
            <div class="android-navigation-container">
                <nav class="android-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Portfolio</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact us</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">My Skills</a>
                </nav>
            </div>
            <span class="android-mobile-title mdl-layout-title" style="text-align:center;">
                <a href="http://wasap.my/60183954840" style="color:grey; text-decoration:none;">Whatsapp <br/>018 395 4840</a>
          </span>
        </div>
    </div>
    <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
            <div class="logo-font android-slogan">Web App Freelancer</div>
            <div class="logo-font android-sub-slogan">build your system and let us help you! <br/><br/>
                <small>
                    <small>
                        Contact me @ <a href="http://wasap.my/60183954840">Whatsapp 018 395 4840</a>
                    </small>
                </small>
            </div>
        </div>
        <hr class="line-beautiful"/>
        <div class="android-customized-section">
            <div class="android-customized-section-text">
                <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">My Skills</div>
                <p class="mdl-typography--font-light">
                    Raw PHP<br/>
                    PHP framework - Codeigniter 2.X.X / Laravel 5.3 - 5.4<br/>
                    Mobile Hybrid framework Phonegap <br/>
                    Android Native Development<br/>
                    Amazon Web Services (AWS) <br/>
                    iOS Native Development<br/>
                    Bootstrap 3.x.x ++<br/>
                    Ionicframework 1 <br/>
                    Ionicframework 2<br/>
                    Payment Gateway<br/>
                    CentOS / Linux <br/>
                    Javascript <br/>
                    JQuery <br/>
                    HTML 5<br/>
                    CPanel <br/>
                    Hosting<br/>
                    Domain <br/>
                    Cordova <br/>
                    Socket.io<br/>
                    Angularjs <br/>
                    Typescript<br/>
                    Ajax <br/>


                    <a href="https://stackoverflow.com/users/4310083" class="android-link mdl-typography--font-light">Checkout my SO profile.</a>
                </p>
            </div>
            {{--<div class="android-customized-section-image"></div>--}}
        </div>
        <hr class="line-beautiful"/>
        <div class="android-more-section">
            <div class="android-section-title mdl-typography--display-1-color-contrast">Portfolio</div>
            <div class="android-card-container mdl-grid">
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{!! asset('assets/images/freelancer/yue-garden.png') !!}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Yue Garden</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Inventory System</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Make the switch
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{!! asset('assets/images/freelancer/population-graph.png') !!}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Population Graph</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            androidify.com
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{!! asset('assets/images/freelancer/kursus-asas-mengurut.jpg')!!}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Kursus Asas Mengurut</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Senarai pakej kursus asas mengurut</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Download now
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="{!! asset('assets/images/freelancer/massage-package-list.jpg')!!}">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Massage Packages</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">Massage package list</span>
                    </div>
                    <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Find apps
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="line-beautiful"/>
        <footer class="android-footer mdl-mega-footer">
            <div class="mdl-mega-footer--top-section">
                <div class="mdl-mega-footer--left-section">
                    <button style="cursor:pointer;" onclick="location.href='https://web.facebook.com/WebAppSystemMaker/'" class="mdl-mega-footer--social-btn"><img src="{!! asset('assets/images/freelancer/fb-btn.jpg') !!} "/></button>
                    &nbsp;
                    <button style="cursor:pointer;" onclick="location.href='https://stackoverflow.com/users/4310083'" class="mdl-mega-footer--social-btn"><img src="{!! asset('assets/images/freelancer/so-btn.jpg') !!}" /></button>
                </div>
            </div>

            <div class="mdl-mega-footer--middle-section">
                <p class="mdl-typography--font-light">Contact @ <a href="http://wasap.my/60183954840">Whatsapp 018 395 4840</a></p>
                <p class="mdl-typography--font-light">imranhamzah@gmail.com</p>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
