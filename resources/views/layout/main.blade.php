<!DOCTYPE html>
<head>
    <!-- Le Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
            Pendataan Vaksinasi Desa Dadirejo
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script type="text/javascript">
        var host = "bootadmin.org";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
            window.location.protocol = "https";
    </script>
    
    <!-- Le Meta Data -->
    <!-- <meta content="Bootadmin" property="og:site_name">
    <meta content="Bootadmin" property="og:title">
    <meta content="website" property="og:type">
    <meta content="Bootadmin is an open source bootstrap admin panel." property="og:description">
    <meta name="keywords" content="bootstrap, admin, theme, panel, administration, material">
    <meta content="images/logo.png" property="og:image">
    <meta content="images/logo.png" property="og:image">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@iamshipon1988">
    <meta name="twitter:creator" content="@iamshipon1988">
    <meta name="twitter:title" content="Bootadmin">
    <meta name="twitter:description" content="An opensource bootstrap admin panel. "> -->

    <!-- Le App Banner Data -->
    <!-- <meta name="apple-itunes-app" content="app-id=1245521413"> -->
    <!--<meta name="apple-itunes-app" content="app-id=1245521413, affiliate-data=myAffiliateData, app-argument=myURL">-->

    <!-- Le Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Le CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset ('/style/vendor/library.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('/style/vendor/jqueryui-flat/jquery-ui.min.css') }}">
     <!-- Modal CSS -->
    <link rel="stylesheet" href="{{ asset ('/modal/modal_style.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('/style/core/style.min.css') }}">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Le Javascript Pre-loads
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Le Favicons
    ================================================== -->
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset ('/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('/images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff"> -->
</head>

<body id="landing" class="sidebar-open">
<!-- <div class="loading">
    <div class="loading-center">
        <img src="/images/loading/map.gif" alt="Loading" />
    </div>
</div> -->
<div class="page-container animsition">
    <div id="dashboardPage">
        <!-- Main Menu -->
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 hidden-xs" style="background: #E5E827;">
                        <div class="logo">
                            <a href="/">
                                <span class="logo-emblem"><img src="/images/logo-pati.png" alt="Logo" /></span>
                                <span class="logo-full">Desa Dadirejo</span>
                            </a>
                        </div>
                        <a href="#" class="menu-toggle wave-effect">
                            <i class="feather icon-menu"></i>
                        </a>
                    </div>
                    <div class="col-md-7 text-right" style="background: #E5E827;">
                        <ul>
                            <li class="btn-group user-account">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar" style="background-color: #E5E827;">
                                        <img src="images/user.svg" alt="profile" />
                                    </div>
                                    <div class="user-content" style="padding-left: 55px;">
                                        <div class="user-name">Setiyoningsih</div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="/admin/akun/profil" class="animsition-link dropdown-item wave-effect"><i class="feather icon-user"></i> Profil</a></li>
                                    <li><a href="/admin/akun/edit-akun" class="animsition-link dropdown-item wave-effect"><i class="feather icon-settings"></i> Pengaturan</a></li>
                                    <li><a href="/logout" class="animsition-link dropdown-item wave-effect"><i class="feather icon-log-in"></i> Logout</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-toggle">
                                <a href="#" class="menu-toggle wave-effect">
                                    <i class="feather icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Menu -->
        <div class="sidebar">
            <div class="logo">
                <a href="/">
                    <span class="logo-emblem"><img src="/images/logo-pati.png" alt="Logo Kab.Pati" /></span>
                    <span class="logo-full">Desa Dadirejo</span>
                </a>
            </div>
            <ul id="sidebarCookie">
                <!-- Menu -->
                <li class="nav-item">
                    <a class="nav-link wave-effect collapsed wave-effect"  data-toggle="collapse" href="{{ url('/admin/dashboard') }}">
                        <i class="feather icon-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="/admin/data-masuk" aria-expanded="false" aria-controls="page-layouts">
                        <i class="feather icon-sidebar"></i>
                        <span class="menu-title">Data Masuk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="/admin/data-vaksinasi" aria-expanded="false" aria-controls="page-elements">
                        <i class="feather icon-layout"></i>
                        <span class="menu-title">Data Vaksinasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="/admin/akun" aria-expanded="false" aria-controls="page-profilebox">
                        <i class="feather icon-users"></i>
                        <span class="menu-title">Akun</span>
                    </a>
                </li>
            </ul>
        </div>

        <main>
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-6">
                        @yield('breadcrumb')
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            <footer style="position:fixed; bottom: 0; margin-left: 30%;">
                <p>&copy; Desa Dadirejo. All Rights Reserved. 
                    <br />Designed and Developed by 
                    Setiyoningsih
                </p>
            </footer>
        </main>
    </div>
</div>


<!-- Javascript -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset ('/scripts/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset ('/scripts/vendor/library.min.js') }}"></script>
<script src="{{ asset ('/scripts/core/main.js') }}"></script>


</body>
</html>
