<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> ERP - Botequim Mauro</title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <link rel="stylesheet" href="../assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="../assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="../assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="../assets/stylesheets/custom.css">
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
</head>

<body>

    @role('admin')
    <!-- .app -->
    <div class="app">
        <header class="app-header app-header-dark">
            <!-- .top-bar -->
            <div class="top-bar">
                <!-- .top-bar-brand -->
                <div class="top-bar-brand">
                    <!-- toggle aside menu -->
                    <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
                        aria-label="toggle aside menu"><span class="hamburger-box"><span
                                class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
                    <a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
                            <defs>
                                <path id="a"
                                    d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z">
                                </path>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path fill="currentColor" fill-rule="nonzero"
                                    d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z">
                                </path>
                                <use class="fill-warning" xlink:href="#a"></use>
                            </g>
                        </svg></a>
                </div><!-- /.top-bar-brand -->
                <!-- .top-bar-list -->
                <div class="top-bar-list">
                    <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                        <!-- toggle menu -->
                        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside"
                            aria-label="toggle menu"><span class="hamburger-box"><span
                                    class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                    </div><!-- /.top-bar-item -->

                    {{-- Inicio da classe dos icones acima --}}
                    <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                        <!-- .nav -->
                        <ul class="header-nav nav">
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown has-notified">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-pulse"></span></a>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <div class="dropdown-arrow"></div>
                                    <h6 class="dropdown-header stop-propagation">
                                        <span>Activities <span class="badge">(2)</span></span>
                                    </h6><!-- .dropdown-scroll -->
                                    <div class="dropdown-scroll perfect-scrollbar">
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item unread">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces15.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Jeffrey Wells created a schedule </p><span
                                                    class="date">Just now</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item unread">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces16.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Anna Vargas logged a chat </p><span
                                                    class="date">3 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces17.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Sara Carr invited to Stilearn Admin </p><span
                                                    class="date">5 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces18.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Arthur Carroll updated a project </p><span
                                                    class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces19.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Hannah Romero created a task </p><span
                                                    class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces20.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Angela Peterson assign a task to you </p><span
                                                    class="date">2 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/uifaces21.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Shirley Mason and 3 others followed you </p><span
                                                    class="date">2 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                    </div><!-- /.dropdown-scroll -->
                                    <a href="user-activities.html" class="dropdown-footer">All activities <i
                                            class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                                </div><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown has-notified">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <div class="dropdown-arrow"></div>
                                    <h6 class="dropdown-header stop-propagation">
                                        <span>Messages</span> <a href="#">Mark all as read</a>
                                    </h6><!-- .dropdown-scroll -->
                                    <div class="dropdown-scroll perfect-scrollbar">
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item unread">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/team1.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Stilearning </p>
                                                <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22
                                                </p><span class="date">2 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="../assets/images/avatars/team3.png" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Openlane </p>
                                                <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span
                                                    class="date">23 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="tile tile-circle bg-green"> GZ </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Gogo Zoom </p>
                                                <p class="text text-truncate"> Live healthy with this wireless sensor.
                                                </p><span class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="tile tile-circle bg-teal"> GD </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Gold Dex </p>
                                                <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7
                                                </p><span class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/team2.png" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Creative Division </p>
                                                <p class="text text-truncate"> Need some feedback on this please </p>
                                                <span class="date">2 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="tile tile-circle bg-pink"> LD </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Lab Drill </p>
                                                <p class="text text-truncate"> Our UX exercise is ready </p><span
                                                    class="date">6 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                    </div><!-- /.dropdown-scroll -->
                                    <a href="page-messages.html" class="dropdown-footer">All messages <i
                                            class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                                </div><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                                    <div class="dropdown-sheets">
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span>
                                                <span class="tile-peek">Teams</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span>
                                                <span class="tile-peek">Projects</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span>
                                                <span class="tile-peek">Tasks</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span>
                                                <span class="tile-peek">Feeds</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span>
                                                <span class="tile-peek">Files</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                    </div><!-- .dropdown-sheets -->
                                </div><!-- .dropdown-menu -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.nav -->
                        <!-- .btn-account -->
                        <div class="dropdown d-none d-md-flex">
                            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                        src="../assets/images/avatars/profile.jpg" alt=""></span> <span
                                    class="account-summary pr-lg-4 d-none d-lg-block"><span
                                        class="account-name">{{ Auth::user()->name }}</span> <span
                                        class="account-description">Administrador</span></span></button>
                            <!-- .dropdown-menu -->
                            <div class="dropdown-menu">
                                <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                <a class="dropdown-item" href="user-profile.html"><span
                                        class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                    href="{{route('logout')}}"><span
                                        class="dropdown-icon oi oi-account-logout"></span> Sair do Sistema</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Central
                                    de Ajuda</a>
                            </div><!-- /.dropdown-menu -->
                        </div><!-- /.btn-account -->
                    </div><!-- /.top-bar-item -->
                </div><!-- /.top-bar-list -->
            </div><!-- /.top-bar -->
        </header><!-- /.app-header -->
        <!-- .app-aside -->
        <aside class="app-aside app-aside-expand-md app-aside-light">
            <!-- .aside-content -->
            <div class="aside-content">
                <!-- .aside-header -->
                <header class="aside-header d-block d-md-none">
                    <!-- .btn-account -->
                    <button class="btn-account" type="button" data-toggle="collapse"
                        data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img
                                src="../assets/images/avatars/profile.jpg" alt=""></span> <span
                            class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                            class="account-summary"><span class="account-name">{{ Auth::user()->name }}</span> <span
                                class="account-description">Administrador</span></span></button>
                    <!-- /.btn-account -->
                    <!-- .dropdown-aside -->
                    <div id="dropdown-aside" class="dropdown-aside collapse">
                        <!-- dropdown-items -->
                        <div class="pb-3">
                            <a class="dropdown-item" href="user-profile.html"><span
                                    class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                href="{{route('logout')}}"><span class="dropdown-icon oi oi-account-logout"></span>
                                Sair do Sistema</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Central de
                                Ajuda</a>
                        </div><!-- /dropdown-items -->
                    </div><!-- /.dropdown-aside -->
                </header><!-- /.aside-header -->
                <!-- .aside-menu -->
                <div class="aside-menu overflow-hidden">
                    <!-- .stacked-menu -->
                    <nav id="stacked-menu" class="stacked-menu">
                        {{-- Inicio do menu navbar --}}
                        <ul class="menu">
                            <!-- .menu-item -->
                            <li class="menu-item has-active">
                                <a href="{{route('dashboard')}}" class="menu-link"><span class="menu-icon fas fa-home"></span>
                                    <span class="menu-text">Inicio</span></a>
                            </li><!-- /.menu-item -->
                            <!-- .menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon far fa-user"></span> <span
                                        class="menu-text">Usuarios</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('addUser')}}" class="menu-link">Adicionar Atendente</a>
                                    </li>
                                    
                                    <li class="menu-item">
                                        <a href="{{route('addStockManager')}}" class="menu-link">Adicionar Gestor de Stock</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{route('addAcountant')}}" class="menu-link">Adicionar Contabilista</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li><!-- /.menu-item -->
                            <!-- .menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span>
                                    <span class="menu-text">Evento</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('allEvent')}}" class="menu-link">Todos Eventos</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li><!-- /.menu-item --><!-- .menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span>
                                    <span class="menu-text">Dividas</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('addClient')}}" class="menu-link">Verificar Dividas</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li>
                            
                            <!-- .menu-header -->
                            <li class="menu-header">Stock </li><!-- /.menu-header -->
                            <!-- .menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span
                                        class="menu-icon oi oi-puzzle-piece"></span> <span
                                        class="menu-text">Categorias</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('allCategories')}}" class="menu-link">Verificar Categorias</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li><!-- /.menu-item --><!-- .menu-item -->
                           
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span>
                                    <span class="menu-text">Producto</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('allProduct')}}" class="menu-link">Verificar Productos</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li><!-- /.menu-item --><!-- .menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span>
                                    <span class="menu-text">Stock</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('allStock')}}" class="menu-link">Entrada de Productos</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('allStock')}}" class="menu-link">Saida de Productos</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li>
                            
                            <li class="menu-header">Venda </li><!-- /.menu-header -->
                            <li class="menu-item">
                                <a href="index-2.html" class="menu-link"><span class="menu-icon fas fa-money-check"></span>
                                    <span class="menu-text">Todas Vendas</span></a>
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a href="{{route('addPayment')}}" class="menu-link"><span class="menu-icon fas fa-money-bill"></span>
                                    <span class="menu-text">Tipos de Pagamentos</span></a>
                            </li><!-- /.menu-item -->
                            
                            <li class="menu-header">Relatorio </li><!-- /.menu-header -->
                            <li class="menu-item">
                                <a href="{{route('addReport')}}" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span>
                                    <span class="menu-text">Relatorios</span></a>
                            </li><!-- /.menu-item -->
                        </ul><!-- /.menu -->
                    </nav><!-- /.stacked-menu -->
                </div><!-- /.aside-menu -->
                <!-- Skin changer -->
                <footer class="aside-footer border-top p-2">
                    <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                            class="d-compact-menu-none">Modo Noturno</span> <i class="fas fa-moon ml-1"></i></button>
                </footer><!-- /Skin changer -->
            </div><!-- /.aside-content -->
        </aside><!-- /.app-aside -->
        <!-- .app-main -->


        {{-- Inicio do conteudo principal do sistema --}}

        @yield('content')

        {{-- Fim do MainContent --}}

    </div><!-- /.app -->

    <script>
        function productos(product) {

            var Product_name = product.value;

            $.get('http://127.0.0.1:8000/admin/getProductDetails?id=' + Product_name, function(data) {
                console.log(data);

                // Atualiza os campos do formulário com os detalhes do produto
                $('#Quantity').val(data.Quantity);
                $('#Price').val(data.Price);
                $('#Code').val(data.Code);
                $('#Entry_date').val(data.Entry_date);
                $('#Expiry_date').val(data.Expiry_date);
            });
        }
        function enableFields() {
            // Habilita temporariamente os campos antes de enviar o formulário
            $('#Quantity').prop('disabled', false);
            $('#Code').prop('disabled', false);
            $('#Price').prop('disabled', false);
            $('#Entry_date').prop('disabled', false);
            $('#Expiry_date').prop('disabled', false);
            
            // Adiciona um atraso para garantir que os campos sejam habilitados antes do envio do formulário
            setTimeout(function() {
                // Desabilita os campos novamente
                $('#Quantity').prop('disabled', true);
                $('#Code').prop('disabled', true);
                $('#Price').prop('disabled', true);
                $('#Entry_date').prop('disabled', true);
                $('#Expiry_date').prop('disabled', true);
            }, 1000); // Ajuste o valor do tempo de espera conforme necessário
        }
    </script>

    <script>
        //Inicio da function que retornar os produtos em json
        function prod(product) {
            var Id_product = product.value;

            $.get('http://127.0.0.1:8000/admin/getProduct?Id_product=' + Id_product, function(data) {
                console.log(data);

                // Atualiza os campos do formulário com os detalhes do produto
                $('#quantity').val(data.Quantity);
                $('#price').val(data.Price);
                $('#code').val(data.Code);
                $('#entry_date').val(data.Entry_date);
                $('#expiry_date').val(data.Expiry_date);
            }); 
        }

        function enableField() {
            // Habilita temporariamente os campos antes de enviar o formulário
            $('#quantity').prop('disabled', false);
            $('#price').prop('disabled', false);
            $('#code').prop('disabled', false);
            $('#entry_date').prop('disabled', false);
            $('#expiry_date').prop('disabled', false);

            // Adiciona um atraso para garantir que os campos sejam habilitados antes do envio do formulário
            setTimeout(function() {
                // Desabilita os campos novamente
                $('#quantity').prop('disabled', true);
                $('#price').prop('disabled', true);
                $('#code').prop('disabled', true);
                $('#entry_date').prop('disabled', true);
                $('#expiry_date').prop('disabled', true);
            }, 1000); // Ajuste o valor do tempo de espera conforme necessário
        }
    </script>

    <script>
        $(document).ready(function() {
            var fieldsDisabled = localStorage.getItem('fieldsDisabled');
            if (fieldsDisabled) {
                // Desabilita os campos
                $('#quanity').val(JSON.parse(fieldsDisabled).Quantity).prop('disabled', true);
                $('#price').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                $('#code').val(JSON.parse(fieldsDisabled).Price).prop('disabled', true);
                $('#entry_date').val(JSON.parse(fieldsDisabled).Entry_date).prop('disabled', true);
                $('#expiry_date').val(JSON.parse(fieldsDisabled).Expiry_date).prop('disabled', true);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var fieldsDisabled = localStorage.getItem('fieldsDisabled');
            if (fieldsDisabled) {
                // Desabilita os campos
                $('#Quantity').val(JSON.parse(fieldsDisabled).Quantity).prop('disabled', true);
                $('#Code').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                $('#Price').val(JSON.parse(fieldsDisabled).Price).prop('disabled', true);
                $('#Entry_date').val(JSON.parse(fieldsDisabled).Entry_date).prop('disabled', true);
                $('#Expiry_date').val(JSON.parse(fieldsDisabled).Expiry_date).prop('disabled', true);
            }
        });
    </script>
    <script src="../assets/vendor/sortablejs/Sortable.min.js"></script> <!-- END PLUGINS JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="../assets/vendor/pace-progress/pace.min.js"></script>
    <script src="../assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="../assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="../assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="../assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-116692175-1');
    </script>

    {{-- Inicio do link de sweetAlerta --}}
    @include('sweetalert::alert')
    {{-- Fim do link do sweetAlerta --}}

    @endrole
    
    @role('attendant')
    <div class="app">
        <header class="app-header app-header-dark">
            <!-- .top-bar -->
            <div class="top-bar">
                <!-- .top-bar-brand -->
                <div class="top-bar-brand">
                    <!-- toggle aside menu -->
                    <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
                        aria-label="toggle aside menu"><span class="hamburger-box"><span
                                class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
                    <a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
                            <defs>
                                <path id="a"
                                    d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z">
                                </path>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path fill="currentColor" fill-rule="nonzero"
                                    d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z">
                                </path>
                                <use class="fill-warning" xlink:href="#a"></use>
                            </g>
                        </svg></a>
                </div><!-- /.top-bar-brand -->
                <!-- .top-bar-list -->
                <div class="top-bar-list">
                    <!-- .top-bar-item -->
                    <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                        <!-- toggle menu -->
                        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside"
                            aria-label="toggle menu"><span class="hamburger-box"><span
                                    class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                    </div><!-- /.top-bar-item -->

                    {{-- Inicio da classe dos icones acima --}}
                    <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                        <!-- .nav -->
                        <ul class="header-nav nav">
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown has-notified">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-pulse"></span></a>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <div class="dropdown-arrow"></div>
                                    <h6 class="dropdown-header stop-propagation">
                                        <span>Activities <span class="badge">(2)</span></span>
                                    </h6><!-- .dropdown-scroll -->
                                    <div class="dropdown-scroll perfect-scrollbar">
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item unread">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces15.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Jeffrey Wells created a schedule </p><span
                                                    class="date">Just now</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item unread">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces16.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Anna Vargas logged a chat </p><span
                                                    class="date">3 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces17.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Sara Carr invited to Stilearn Admin </p><span
                                                    class="date">5 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces18.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Arthur Carroll updated a project </p><span
                                                    class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces19.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Hannah Romero created a task </p><span
                                                    class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces20.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Angela Peterson assign a task to you </p><span
                                                    class="date">2 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/uifaces21.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="text"> Shirley Mason and 3 others followed you </p><span
                                                    class="date">2 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                    </div><!-- /.dropdown-scroll -->
                                    <a href="user-activities.html" class="dropdown-footer">All activities <i
                                            class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                                </div><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown has-notified">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <div class="dropdown-arrow"></div>
                                    <h6 class="dropdown-header stop-propagation">
                                        <span>Messages</span> <a href="#">Mark all as read</a>
                                    </h6><!-- .dropdown-scroll -->
                                    <div class="dropdown-scroll perfect-scrollbar">
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item unread">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/team1.jpg" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Stilearning </p>
                                                <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22
                                                </p><span class="date">2 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/team3.png" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Openlane </p>
                                                <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span
                                                    class="date">23 hours ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="tile tile-circle bg-green"> GZ </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Gogo Zoom </p>
                                                <p class="text text-truncate"> Live healthy with this wireless sensor.
                                                </p><span class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="tile tile-circle bg-teal"> GD </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Gold Dex </p>
                                                <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7
                                                </p><span class="date">1 day ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="user-avatar">
                                                <img src="assets/images/avatars/team2.png" alt="">
                                            </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Creative Division </p>
                                                <p class="text text-truncate"> Need some feedback on this please </p>
                                                <span class="date">2 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                        <!-- .dropdown-item -->
                                        <a href="#" class="dropdown-item">
                                            <div class="tile tile-circle bg-pink"> LD </div>
                                            <div class="dropdown-item-body">
                                                <p class="subject"> Lab Drill </p>
                                                <p class="text text-truncate"> Our UX exercise is ready </p><span
                                                    class="date">6 days ago</span>
                                            </div>
                                        </a> <!-- /.dropdown-item -->
                                    </div><!-- /.dropdown-scroll -->
                                    <a href="page-messages.html" class="dropdown-footer">All messages <i
                                            class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                                </div><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                                    <div class="dropdown-sheets">
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span>
                                                <span class="tile-peek">Teams</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span>
                                                <span class="tile-peek">Projects</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span>
                                                <span class="tile-peek">Tasks</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span>
                                                <span class="tile-peek">Feeds</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span
                                                    class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span>
                                                <span class="tile-peek">Files</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                    </div><!-- .dropdown-sheets -->
                                </div><!-- .dropdown-menu -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.nav -->
                        <!-- .btn-account -->
                        <div class="dropdown d-none d-md-flex">
                            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                        src="assets/images/avatars/profile.jpg" alt=""></span> <span
                                    class="account-summary pr-lg-4 d-none d-lg-block"><span
                                        class="account-name">{{ Auth::user()->name }}</span> <span
                                        class="account-description">Atendente</span></span></button>
                            <!-- .dropdown-menu -->
                            <div class="dropdown-menu">
                                <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                <a class="dropdown-item" href="user-profile.html"><span
                                        class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                    href="{{route('logout')}}"><span
                                        class="dropdown-icon oi oi-account-logout"></span> Sair do Sistema</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Central
                                    de Ajuda</a>
                            </div><!-- /.dropdown-menu -->
                        </div><!-- /.btn-account -->
                    </div><!-- /.top-bar-item -->`
                </div><!-- /.top-bar-list -->
            </div><!-- /.top-bar -->
        </header><!-- /.app-header -->
        <!-- .app-aside -->
        <aside class="app-aside app-aside-expand-md 
        app-aside-light">
            <!-- .aside-content -->
            <div class="aside-content">
                <!-- .aside-header -->
                <header class="aside-header d-block d-md-none">
                    <!-- .btn-account -->
                    <button class="btn-account" type="button" data-toggle="collapse"
                        data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img
                                src="assets/images/avatars/profile.jpg" alt=""></span> <span
                            class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                            class="account-summary"><span class="account-name">{{ Auth::user()->name }}</span> <span
                                class="account-description">Atendente</span></span></button>
                    <!-- /.btn-account -->
                    <!-- .dropdown-aside -->
                    <div id="dropdown-aside" class="dropdown-aside collapse">
                        <!-- dropdown-items -->
                        <div class="pb-3">
                            <a class="dropdown-item" href="user-profile.html"><span
                                    class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                href="{{route('logout')}}"><span class="dropdown-icon oi oi-account-logout"></span>
                                Sair do Sistema</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Central de
                                Ajuda</a>
                        </div><!-- /dropdown-items -->
                    </div><!-- /.dropdown-aside -->
                </header><!-- /.aside-header -->
                <!-- .aside-menu -->
                <div class="aside-menu overflow-hidden">
                    <!-- .stacked-menu -->
                    <nav id="stacked-menu" class="stacked-menu">
                        {{-- Inicio do menu navbar --}}
                        <ul class="menu">
                            <!-- .menu-item -->
                            <li class="menu-item has-active">
                                <a href="{{route('dashboard')}}" class="menu-link"><span class="menu-icon fas fa-home"></span>
                                    <span class="menu-text">Inicio</span></a>
                            </li><!-- /.menu-item -->
                            
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon far fa-user"></span> <span
                                        class="menu-text">Pedidos</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('addClientRequest')}}" class="menu-link">Verificar Pedidos</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li><!-- /.menu-item -->
                            <!-- .menu-header -->
                            <li class="menu-header">Stock </li><!-- /.menu-header -->
                            
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span>
                                    <span class="menu-text">Stock</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('allStock')}}" class="menu-link">Saida de Productos</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li>
                            
                            <li class="menu-header">Venda </li><!-- /.menu-header -->
                            <li class="menu-item">
                                <a href="index-2.html" class="menu-link"><span class="menu-icon fas fa-money-check"></span>
                                    <span class="menu-text">Todas Vendas</span></a>
                            </li><!-- /.menu-item -->
                            
                        </ul><!-- /.menu --><!-- /.menu -->
                    </nav><!-- /.stacked-menu -->
                </div><!-- /.aside-menu -->
                <!-- Skin changer -->
                <footer class="aside-footer border-top p-2">
                    <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                            class="d-compact-menu-none">Modo Noturno</span> <i class="fas fa-moon ml-1"></i></button>
                </footer><!-- /Skin changer -->
            </div><!-- /.aside-content -->
        </aside><!-- /.app-aside -->
        <!-- .app-main -->


        {{-- Inicio do conteudo principal do sistema --}}

        @yield('content')

        {{-- Fim do MainContent --}}

    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->

    <script>

        function productos(product) {

            var Product_name = product.value;

            $.get('http://127.0.0.1:8000/admin/getProductDetails?Product_name=' + Product_name, function(data) {
                console.log(data);

                // Atualiza os campos do formulário com os detalhes do produto
                $('#Quantity').val(data.Quantity);
                $('#Price').val(data.Price);
                $('#Code').val(data.Code);
                $('#Entry_date').val(data.Entry_date);
                $('#Expiry_date').val(data.Expiry_date);
            });
        } 
    </script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/pace-progress/pace.min.js"></script>
    <script src="assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-116692175-1');
    </script>

    {{-- Inicio do link de sweetAlerta --}}
    @include('sweetalert::alert')
    {{-- Fim do link do sweetAlerta --}}

    @endrole


</body>

</html>
