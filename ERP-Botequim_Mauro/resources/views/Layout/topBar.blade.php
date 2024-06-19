@role('admin')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
        <!-- Begin SEO tag -->
        <title> ERP - Botequim Mauro</title>
        <meta property="og:title" content="Dashboard">
        <meta property="og:locale" content="en_US">
        <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
        <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
        <link rel="canonical" href="index.html">
        <meta property="og:url" content="index.html">
        <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
        
        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
        <link rel="shortcut icon" href="assets/favicon.ico">
        <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
        <!-- BEGIN PLUGINS STYLES -->
        <link rel="stylesheet" href="assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
        <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
        <link rel="stylesheet" href="assets/stylesheets/custom.css">

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
                        {{-- <a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg"
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
                            </svg></a> --}}
                        <a href="index-2.html"><img style="width: 14rem;margin-left:-2.3rem" src="assets/logo.png"></a>
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
                                                <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i
                                                            class="oi oi-fork"></i></span>
                                                    <span class="tile-peek">Projects</span></a>
                                            </div><!-- /.dropdown-sheet-item -->
                                            <!-- .dropdown-sheet-item -->
                                            <div class="dropdown-sheet-item">
                                                <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i
                                                            class="fa fa-tasks"></i></span>
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
                                            src="assets/dif.jpg" alt=""></span> <span
                                        class="account-summary pr-lg-4 d-none d-lg-block"><span
                                            class="account-name">{{ Auth::user()->name }}</span> <span
                                            class="account-description">Administrador</span></span></button>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu">
                                    <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                    <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                    <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                    <a class="dropdown-item" href="{{route('updateProfile',['id'=>Auth::user()->id])}}"><span
                                            class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                        href="{{ route('logout') }}"><span
                                            class="dropdown-icon oi oi-account-logout"></span> Sair do Sistema</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                            data-toggle="modal">Central
                                            de Ajuda</a>
                                </div><!-- /.dropdown-menu -->
                            </div><!-- /.btn-account -->
                        </div><!-- /.top-bar-item -->
                    </div><!-- /.top-bar-list -->
                </div><!-- /.top-bar -->
            </header><!-- /.app-header -->
            <div class="modal fade zoomIn" id="RecordModal"
            tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form >
                        
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <h2>Contacte-nos:</h2>
                                <h3>+258 867336817</h3>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                    class="account-description">Administrador</span></span></button>
                        <!-- /.btn-account -->
                        <!-- .dropdown-aside -->
                        <div id="dropdown-aside" class="dropdown-aside collapse">
                            <!-- dropdown-items -->
                            <div class="pb-3">
                                <a class="dropdown-item" href="{{route('updateProfile',['id'=>Auth::user()->id])}}"><span
                                        class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                    href="{{ route('logout') }}"><span class="dropdown-icon oi oi-account-logout"></span>
                                    Sair do Sistema</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                    data-toggle="modal">Central
                                    de Ajuda</a>
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
                                <li class="menu-item {{ request()->routeIs('dashboard') ? 'has-active' : '' }}">
                                    <a href="{{ route('dashboard') }}" class="menu-link"><span
                                            class="menu-icon fas fa-home"></span>
                                        <span class="menu-text">Inicio</span></a>
                                </li><!-- /.menu-item -->
                                <!-- .menu-item -->
                                <li
                                    class="menu-item {{ request()->routeIs('addUser', 'addStockManager', 'addAcountant') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon far fa-user"></span> <span
                                            class="menu-text">Usuarios</span> {{-- <span
                                            class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('addUser') ? 'has-active' : '' }}">
                                            <a href="{{ route('addUser') }}" class="menu-link">Adicionar Atendente</a>
                                        </li>

                                        <li
                                            class="menu-item {{ request()->routeIs('addStockManager') ? 'has-active' : '' }}">
                                            <a href="{{ route('addStockManager') }}" class="menu-link">Adicionar Gestor
                                                de Stock</a>
                                        </li>

                                        <li
                                            class="menu-item {{ request()->routeIs('addAcountant') ? 'has-active' : '' }}">
                                            <a href="{{ route('addAcountant') }}" class="menu-link">Adicionar
                                                Contabilista</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li>
                                <!-- .menu-item -->
                                <li class="menu-item has-child {{ request()->routeIs('addClient') ? 'has-active' : '' }}">
                                    <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span>
                                        <span class="menu-text">Dividas</span> {{-- <span
                                            class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li
                                            class="menu-item {{ request()->routeIs('addClient', 'showClient') ? 'has-active' : '' }}">
                                            <a href="{{ route('addClient') }}" class="menu-link">Verificar Dividas</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li>

                                <!-- .menu-header -->
                                <li class="menu-header">Stock </li><!-- /.menu-header -->
                                <!-- .menu-item -->
                                <li
                                    class="menu-item {{ request()->routeIs('allCategories') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span
                                            class="menu-icon oi oi-puzzle-piece"></span> <span
                                            class="menu-text">Categorias</span> {{-- <span
                                            class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li
                                            class="menu-item {{ request()->routeIs('allCategories') ? 'has-active' : '' }}">
                                            <a href="{{ route('allCategories') }}" class="menu-link">Verificar
                                                Categorias</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->

                                <li
                                    class="menu-item {{ request()->routeIs('allProduct') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span>
                                        <span class="menu-text">Producto</span> {{-- <span
                                            class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('allProduct') ? 'has-active' : '' }}">
                                            <a href="{{ route('allProduct') }}" class="menu-link">Verificar Productos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->
                                <li
                                    class="menu-item {{ request()->routeIs('allStock', 'allStockOut') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span>
                                        <span class="menu-text">Stock</span> {{-- <span
                                            class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('allStock') ? 'has-active' : '' }}">
                                            <a href="{{ route('allStock') }}" class="menu-link">Entrada de Productos</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('allStockOut') ? 'has-active' : '' }}">
                                            <a href="{{ route('allStockOut') }}" class="menu-link">Saida de Productos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li>

                                <li class="menu-header">Venda </li><!-- /.menu-header -->
                                <li class="menu-item {{ request()->routeIs('allSale') ? 'has-active' : '' }}">
                                    <a href="{{ route('allSale') }}" class="menu-link"><span
                                            class="menu-icon fas fa-money-check"></span>
                                        <span class="menu-text">Todas Vendas</span></a>
                                </li><!-- /.menu-item -->
                                <li class="menu-item {{ request()->routeIs('addPayment') ? 'has-active' : '' }}">
                                    <a href="{{ route('addPayment') }}" class="menu-link"><span
                                            class="menu-icon fas fa-money-bill"></span>
                                        <span class="menu-text">Tipos de Pagamentos</span></a>
                                </li><!-- /.menu-item -->

                                <li class="menu-header">Relatorio </li><!-- /.menu-header -->

                                <li
                                    class="menu-item {{ request()->routeIs('saleReport', 'productReport') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span>
                                        <span class="menu-text">Relatorios</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('saleReport') ? 'has-active' : '' }}">
                                            <a href="{{ route('saleReport') }}" class="menu-link">
                                                <span class="menu-text">Relatorios de Vendas</span></a>
                                        </li>
                                        <li
                                            class="menu-item {{ request()->routeIs('productReport') ? 'has-active' : '' }}">
                                            <a href="{{ route('productReport') }}"
                                                class="menu-link {{ request()->routeIs('productReport') ? 'has-active' : '' }}">
                                                <span class="menu-text">Relatorios de Productos</span></a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->

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
        
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-116692175-1');
        </script>

        
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Função para verificar o estoque
                function checkStock() {
                    fetch('/check-stock', {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            data.forEach(product => {
                                alert(`Atenção: A quantidade do produto "${product.product.Product_name}" está baixa (${product.Quantity} unidades restantes).`);
                            });
                        }
                    })
                    .catch(error => console.error('Erro:', error));
                }

                // Verificar o estoque ao carregar a página
                checkStock();
            });

        </script>

<!-- Script AJAX -->
<script>
$(document).ready(function() {
    $('#saleForm').on('submit', function(e) {
        e.preventDefault(); // Evitar o comportamento padrão do formulário

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    alert(response.message);

                    // Adicionar a nova venda à tabela
                    var newRow = `
                        <tr>
                            <td class="align-middle">${response.sale.Product_name}</td>
                            <td class="align-middle">${response.sale.Product_price} MZN</td>
                            <td class="align-middle">${response.sale.Quantity}</td>
                            <td class="align-middle">${response.sale.Amount} MZN</td>
                            <td class="align-middle text-right">
                                <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal${response.sale.id}">
                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-secondary">
                                    <i class="far fa-trash-alt" data-target="#deleteRecordModal${response.sale.id}" data-toggle="modal"></i> <span class="sr-only">Remove</span>
                                </button>
                            </td>
                        </tr>`;
                    
                    $('#salesTable tbody').append(newRow);
                } else {
                    alert(response.message);
                }
            },
            error: function(response) {
                if (response.status === 400) {
                    let errors = response.responseJSON.errors;
                    let message = response.responseJSON.message;
                    let errorMessage = '';

                    for (let key in errors) {
                        errorMessage += errors[key][0] + '\n';
                    }

                    alert(errorMessage);
                } else {
                    alert('Ocorreu um erro inesperado.');
                }
            }
        });
    });
});
</script>

<script>
    function printPage()
    {
        window.print();
    }
</script>
        {{-- Inicio do link de sweetAlerta --}}
        @include('sweetalert::alert')
        {{-- Fim do link do sweetAlerta --}}
        <script>
            async function fetchMonthlySalesData() {
                try {
                    const response = await fetch('/getMonthlySales');
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    const data = await response.json();
                    generateMonthlySalesChart(data);
                } catch (error) {
                    console.error('Error fetching monthly sales data:', error);
                }
            }

            function generateMonthlySalesChart(data) {
                var months = [];
                var sales = [];

                data.forEach(function(sale) {
                    months.push(sale.month);
                    sales.push(sale.total_sales);
                });

                var ctx = document.getElementById('monthlySalesChart').getContext('2d');
                var monthlySalesChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Vendas Mensais',
                            data: sales,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            // Chama a função para buscar e gerar o gráfico
            fetchMonthlySalesData();

            $(document).ready(function() {
                // Função para buscar os dados do servidor
                function fetchBestSellingProductsData() {
                    return $.ajax({
                        url: 'http://127.0.0.1:8000/getBestSellingProducts',
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            return response;
                        },
                        error: function(error) {
                            console.error('Erro ao buscar os dados de vendas:', error);
                        }
                    });
                }

                // Inicializa o gráfico Chart.js
                async function initChart() {
                    const salesData = await fetchBestSellingProductsData();

                    const labels = salesData.map(item => item.product_name);
                    const data = salesData.map(item => item.quantity_sold);

                    const ctx = document.getElementById('bestSellingProductsChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Quantidade que Saiu',
                                data: data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(199, 199, 199, 0.2)',
                                    'rgba(83, 102, 255, 0.2)',
                                    'rgba(255, 99, 255, 0.2)',
                                    'rgba(99, 255, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(199, 199, 199, 1)',
                                    'rgba(83, 102, 255, 1)',
                                    'rgba(255, 99, 255, 1)',
                                    'rgba(99, 255, 132, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Produtos Com Mais Saidas'
                                }
                            }
                        }
                    });
                }

                // Chama a função para inicializar o gráfico
                initChart();
            });

            $(document).ready(function() {
                // Inicializa o gráfico Chart.js
                const ctx = document.getElementById('topSellingProductsChart').getContext('2d');
                let topSellingProductsChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Quantidade Vendida',
                            data: [],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Função para buscar e carregar os dados
                function loadData(period) {
                    fetch(`/getTopSellingProducts?period=${period}`)
                        .then(response => response.json())
                        .then(data => {
                            if (Array.isArray(data)) {
                                const tableBody = $('#top-selling-products-table');
                                tableBody.empty(); // Limpar quaisquer dados existentes

                                // Atualiza os dados da tabela
                                data.forEach(product => {
                                    const row = `<tr>
                                                    <td class="align-middle text-truncate">${product.name}</td>
                                                    <td class="align-middle text-center">${product.total_quantity}</td>
                                                    <td class="align-middle text-center">
                                                    </td>
                                                </tr>`;
                                    tableBody.append(row);
                                });

                                // Atualiza os dados do gráfico
                                const labels = data.map(product => product.name);
                                const quantities = data.map(product => product.total_quantity);

                                topSellingProductsChart.data.labels = labels;
                                topSellingProductsChart.data.datasets[0].data = quantities;
                                topSellingProductsChart.update();
                            } else {
                                console.error('Data received is not an array');
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching top selling products:', error);
                        });
                }

                // Carregar dados atuais por padrão
                loadData('current');

                // Adicionar event listeners aos botões do dropdown
                $('.dropdown-menu .custom-control-input').on('click', function() {
                    const period = $(this).data('period');
                    loadData(period);
                });
            });

            $(document).ready(function() {
                // Função para buscar os dados do servidor
                function fetchStockData() {
                    return $.ajax({
                        url: 'http://127.0.0.1:8000/getStockQuantities',
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            return response;
                        },
                        error: function(error) {
                            console.error('Erro ao buscar os dados do estoque:', error);
                        }
                    });
                }

                // Inicializa o gráfico Chart.js
                async function initChart() {
                    const stockData = await fetchStockData();

                    const labels = stockData.map(item => item.product_name);
                    const data = stockData.map(item => item.quantity);

                    const ctx = document.getElementById('stockQuantityChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Quantidade em Estoque',
                                data: data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(199, 199, 199, 0.2)',
                                    'rgba(83, 102, 255, 0.2)',
                                    'rgba(255, 99, 255, 0.2)',
                                    'rgba(99, 255, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(199, 199, 199, 1)',
                                    'rgba(83, 102, 255, 1)',
                                    'rgba(255, 99, 255, 1)',
                                    'rgba(99, 255, 132, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Produtos com Maior Quantidade em Estoque'
                                }
                            }
                        }
                    });
                }

                // Chama a função para inicializar o gráfico
                initChart();
            });
        </script>
    </body>

    </html>
@endrole

@role('attendant')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- End Required meta tags -->
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
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
        <!-- End GOOGLE FONT -->
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

                        <a href="index-2.html"><img style="width: 14rem;margin-left:-2.3rem"
                                src="../assets/logo.png"></a>
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
                                            src="../assets/dif.jpg" alt=""></span> <span
                                        class="account-summary pr-lg-4 d-none d-lg-block"><span
                                            class="account-name">{{ Auth::user()->name }}</span> <span
                                            class="account-description">Atendente</span></span></button>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu">
                                    <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                    <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                    <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                    <a class="dropdown-item" href="{{route('updateProfile',['id'=>Auth::user()->id])}}"><span
                                            class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                        href="{{ route('logout') }}"><span
                                            class="dropdown-icon oi oi-account-logout"></span> Sair do Sistema</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                            data-toggle="modal">Central
                                            de Ajuda</a>
                                </div><!-- /.dropdown-menu -->
                            </div><!-- /.btn-account -->
                        </div><!-- /.top-bar-item -->
                    </div><!-- /.top-bar-list -->
                </div>
            </header><!-- /.app-header -->
            <div class="modal fade zoomIn" id="RecordModal"
            tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form >
                        
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <h2>Contacte-nos:</h2>
                                <h3>+258 867336817</h3>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                    src="../assets/images/avatars/profile.jpg" alt=""></span> <span
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
                                    href="{{ route('logout') }}"><span class="dropdown-icon oi oi-account-logout"></span>
                                    Sair do Sistema</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                    data-toggle="modal">Central
                                    de Ajuda</a>
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
                                <li class="menu-item {{ request()->routeIs('dashboard') ? 'has-active' : '' }}">
                                    <a href="{{ route('dashboard') }}" class="menu-link"><span
                                            class="menu-icon fas fa-home"></span>
                                        <span class="menu-text">Inicio</span></a>
                                </li><!-- /.menu-item -->

                                <li
                                    class="menu-item {{ request()->routeIs('addClientRequest', 'showClientRequest') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon far fa-user"></span> <span
                                            class="menu-text">Pedidos</span> {{-- <span
                                            class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                    <ul class="menu">
                                        <li
                                            class="menu-item {{ request()->routeIs('addClientRequest', 'showClientRequest') ? 'has-active' : '' }}">
                                            <a href="{{ route('addClientRequest') }}" class="menu-link">Verificar
                                                Pedidos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item -->

                                <li class="menu-header">Venda </li><!-- /.menu-header -->
                                <li class="menu-item {{ request()->routeIs('allSale') ? 'has-active' : '' }}">
                                    <a href="{{ route('allSale') }}" class="menu-link"><span
                                            class="menu-icon fas fa-money-check"></span>
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
        <script>
            //Inicio da function que retornar os produtos em json
            function prod(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/getDebit?id=' + Id_product, function(data) {
                    console.log(data);

                    $('#Price').val(data.Price);
                });
            }

            function enableFields() {
                $('#Price').prop('disabled', false);

                setTimeout(function() {
                    $('#Price').prop('disabled', true);
                }, 1000);
            }

            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Price').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

        <script>
            //Inicio da function que retornar os produtos em json
            function pro(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/getDebit?id=' + Id_product, function(data) {
                    console.log(data);

                    $('#Pric').val(data.Price);
                });
            }

            function enable() {
                $('#Pric').prop('disabled', false);

                setTimeout(function() {
                    $('#Pric').prop('disabled', true);
                }, 1000);
            }

            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Pric').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

        
<script>
    function printPage()
    {
        window.print();
    }
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

        <script>
            //Inicio do script para editar o modal de editar o producto na divida
            function prodi(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/admin/getDebit?Id_product=' + Id_product, function(data) {
                    console.log(data);

                    $('#Priced').val(data.Price);
                });
            }

            function enableField() {
                $('#Priced').prop('disabled', false);

                setTimeout(function() {
                    $('#Priced').prop('disabled', true);
                }, 1000);
            }
        </script>
        <script>
            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Priced').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

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

        <script src="../assets/javascript/pages/profile-demo.js"></script> <!-- END PAGE LEVEL JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        <script src="./assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
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

    </body>

    </html>
@endrole


@role('stock_manager')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- End Required meta tags -->
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
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
        <!-- End GOOGLE FONT -->
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
                        {{-- <a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg"
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
                    </svg></a> --}}
                        <a href="index-2.html"><img style="width: 14rem;margin-left:-2.3rem"
                                src="../assets/logo.png"></a>
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
                                            src="../assets/dif.jpg" alt=""></span> <span
                                        class="account-summary pr-lg-4 d-none d-lg-block"><span
                                            class="account-name">{{ Auth::user()->name }}</span> <span
                                            class="account-description">Gestor de Stock</span></span></button>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu">
                                    <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                    <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                    <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                    <a class="dropdown-item" href="{{route('updateProfile',['id'=>Auth::user()->id])}}"><span
                                            class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                        href="{{ route('logout') }}"><span
                                            class="dropdown-icon oi oi-account-logout"></span> Sair do Sistema</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                            data-toggle="modal">Central
                                            de Ajuda</a>
                                </div><!-- /.dropdown-menu -->
                            </div><!-- /.btn-account -->
                        </div><!-- /.top-bar-item -->
                    </div><!-- /.top-bar-list -->
                </div>
            </header><!-- /.app-header -->
            <div class="modal fade zoomIn" id="RecordModal"
            tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form >
                        
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <h2>Contacte-nos:</h2>
                                <h3>+258 867336817</h3>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                    src="../assets/images/avatars/profile.jpg" alt=""></span> <span
                                class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                                class="account-summary"><span class="account-name">{{ Auth::user()->name }}</span> <span
                                    class="account-description">Gestor de Stock</span></span></button>
                        <!-- /.btn-account -->
                        <!-- .dropdown-aside -->
                        <div id="dropdown-aside" class="dropdown-aside collapse">
                            <!-- dropdown-items -->
                            <div class="pb-3">
                                <a class="dropdown-item" href="user-profile.html"><span
                                        class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                    href="{{ route('logout') }}"><span class="dropdown-icon oi oi-account-logout"></span>
                                    Sair do Sistema</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                    data-toggle="modal">Central
                                    de Ajuda</a>
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
                                <li class="menu-item {{ request()->routeIs('dashboard') ? 'has-active' : '' }}">
                                    <a href="{{ route('dashboard') }}" class="menu-link"><span
                                            class="menu-icon fas fa-home"></span>
                                        <span class="menu-text">Inicio</span></a>
                                </li>
                                <li
                                    class="menu-item {{ request()->routeIs('allCategories') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span
                                            class="menu-icon oi oi-puzzle-piece"></span> <span
                                            class="menu-text">Categorias</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li
                                            class="menu-item {{ request()->routeIs('allCategories') ? 'has-active' : '' }}">
                                            <a href="{{ route('allCategories') }}" class="menu-link">Verificar
                                                Categorias</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->

                                <li
                                    class="menu-item {{ request()->routeIs('allProduct') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span>
                                        <span class="menu-text">Producto</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('allProduct') ? 'has-active' : '' }}">
                                            <a href="{{ route('allProduct') }}" class="menu-link">Verificar Productos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->
                                <li
                                    class="menu-item {{ request()->routeIs('allStock', 'allStockOut') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span>
                                        <span class="menu-text">Stock</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('allStock') ? 'has-active' : '' }}">
                                            <a href="{{ route('allStock') }}" class="menu-link">Entrada de Productos</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('allStockOut') ? 'has-active' : '' }}">
                                            <a href="{{ route('allStockOut') }}" class="menu-link">Saida de Productos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li>

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
            function printPage()
            {
                window.print();
            }
        </script>
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
        <script>
            //Inicio da function que retornar os produtos em json
            function prod(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/getDebit?id=' + Id_product, function(data) {
                    console.log(data);

                    $('#Price').val(data.Price);
                });
            }

            function enableFields() {
                $('#Price').prop('disabled', false);

                setTimeout(function() {
                    $('#Price').prop('disabled', true);
                }, 1000);
            }

            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Price').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

        <script>
            //Inicio da function que retornar os produtos em json
            function pro(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/getDebit?id=' + Id_product, function(data) {
                    console.log(data);

                    $('#Pric').val(data.Price);
                });
            }

            function enable() {
                $('#Pric').prop('disabled', false);

                setTimeout(function() {
                    $('#Pric').prop('disabled', true);
                }, 1000);
            }

            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Pric').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
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

        <script>
            //Inicio do script para editar o modal de editar o producto na divida
            function prodi(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/admin/getDebit?Id_product=' + Id_product, function(data) {
                    console.log(data);

                    $('#Priced').val(data.Price);
                });
            }

            function enableField() {
                $('#Priced').prop('disabled', false);

                setTimeout(function() {
                    $('#Priced').prop('disabled', true);
                }, 1000);
            }
        </script>
        <script>
            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Priced').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

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

        <script src="../assets/javascript/pages/profile-demo.js"></script> <!-- END PAGE LEVEL JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        <script src="./assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Função para verificar o estoque
                function checkStock() {
                    fetch('/check-stock', {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            data.forEach(product => {
                                alert(`Atenção: A quantidade do produto "${product.product.Product_name}" está baixa (${product.Quantity} unidades restantes).`);
                            });
                        }
                    })
                    .catch(error => console.error('Erro:', error));
                }
    
                // Verificar o estoque ao carregar a página
                checkStock();
            });
    
        </script>
    

    </body>

    </html>
@endrole

@role('accountant')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- End Required meta tags -->
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
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
        <!-- End GOOGLE FONT -->
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
                        {{-- <a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg"
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
                    </svg></a> --}}
                        <a href="index-2.html"><img style="width: 14rem;margin-left:-2.3rem"
                                src="../assets/logo.png"></a>
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
                                            src="../assets/dif.jpg" alt=""></span> <span
                                        class="account-summary pr-lg-4 d-none d-lg-block"><span
                                            class="account-name">{{ Auth::user()->name }}</span> <span
                                            class="account-description">Contabilista</span></span></button>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu">
                                    <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                    <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                    <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                    <a class="dropdown-item" href="{{route('updateProfile',['id'=>Auth::user()->id])}}"><span
                                            class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                        href="{{ route('logout') }}"><span
                                            class="dropdown-icon oi oi-account-logout"></span> Sair do Sistema</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                            data-toggle="modal">Central
                                            de Ajuda</a>
                                </div><!-- /.dropdown-menu -->
                            </div><!-- /.btn-account -->
                        </div><!-- /.top-bar-item -->
                    </div><!-- /.top-bar-list -->
                </div>
            </header><!-- /.app-header -->
            <div class="modal fade zoomIn" id="RecordModal"
            tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form >
                        
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <h2>Contacte-nos:</h2>
                                <h3>+258 867336817</h3>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                    src="../assets/images/avatars/profile.jpg" alt=""></span> <span
                                class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                                class="account-summary"><span class="account-name">{{ Auth::user()->name }}</span> <span
                                    class="account-description">Contabilista</span></span></button>
                        <!-- /.btn-account -->
                        <!-- .dropdown-aside -->
                        <div id="dropdown-aside" class="dropdown-aside collapse">
                            <!-- dropdown-items -->
                            <div class="pb-3">
                                <a class="dropdown-item" href="user-profile.html"><span
                                        class="dropdown-icon oi oi-person"></span> Perfil</a> <a class="dropdown-item"
                                    href="{{ route('logout') }}"><span class="dropdown-icon oi oi-account-logout"></span>
                                    Sair do Sistema</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" data-target="#RecordModal"
                                    data-toggle="modal">Central
                                    de Ajuda</a>
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
                                <li class="menu-item {{ request()->routeIs('dashboard') ? 'has-active' : '' }}">
                                    <a href="{{ route('dashboard') }}" class="menu-link"><span
                                            class="menu-icon fas fa-home"></span>
                                        <span class="menu-text">Inicio</span></a>
                                </li>
                                <li
                                    class="menu-item {{ request()->routeIs('allDebitAccountant') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span
                                            class="menu-icon oi oi-puzzle-piece"></span> <span
                                            class="menu-text">Dividas</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li
                                            class="menu-item {{ request()->routeIs('allDebitAccountant') ? 'has-active' : '' }}">
                                            <a href="{{ route('allDebitAccountant') }}" class="menu-link">Verificar
                                                Dividas</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->

                                <li
                                    class="menu-item {{ request()->routeIs('allProduct') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span>
                                        <span class="menu-text">Producto</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('allProduct') ? 'has-active' : '' }}">
                                            <a href="{{ route('allProduct') }}" class="menu-link">Verificar Productos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li><!-- /.menu-item --><!-- .menu-item -->
                                <li
                                    class="menu-item {{ request()->routeIs('allStock', 'allStockOut') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span>
                                        <span class="menu-text">Stock</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a> <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('allStock') ? 'has-active' : '' }}">
                                            <a href="{{ route('allStock') }}" class="menu-link ">Entrada de Productos</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('allStockOut') ? 'has-active' : '' }}">
                                            <a href="{{ route('allStockOut') }}" class="menu-link ">Saida de
                                                Productos</a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li>

                                <li class="menu-header">Relatorios </li><!-- /.menu-header -->
                                <li
                                    class="menu-item {{ request()->routeIs('saleReport', 'productReport') ? 'has-active' : '' }} has-child">
                                    <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span>
                                        <span class="menu-text">Relatorios</span> {{-- <span
                                        class="badge badge-warning">New</span> --}}</a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ request()->routeIs('saleReport') ? 'has-active' : '' }}">
                                            <a href="{{ route('saleReport') }}" class="menu-link">
                                                <span class="menu-text">Relatorios de Vendas</span></a>
                                        </li>
                                        <li
                                            class="menu-item {{ request()->routeIs('productReport') ? 'has-active' : '' }}">
                                            <a href="{{ route('productReport') }}"
                                                class="menu-link {{ request()->routeIs('productReport') ? 'has-active' : '' }}">
                                                <span class="menu-text">Relatorios de Productos</span></a>
                                        </li>
                                    </ul><!-- /child menu -->
                                </li>
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
            function printPage()
            {
                window.print();
            }
        </script>

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
        <script>
            //Inicio da function que retornar os produtos em json
            function prod(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/getDebit?id=' + Id_product, function(data) {
                    console.log(data);

                    $('#Price').val(data.Price);
                });
            }

            function enableFields() {
                $('#Price').prop('disabled', false);

                setTimeout(function() {
                    $('#Price').prop('disabled', true);
                }, 1000);
            }

            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Price').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

        <script>
            //Inicio da function que retornar os produtos em json
            function pro(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/getDebit?id=' + Id_product, function(data) {
                    console.log(data);

                    $('#Pric').val(data.Price);
                });
            }

            function enable() {
                $('#Pric').prop('disabled', false);

                setTimeout(function() {
                    $('#Pric').prop('disabled', true);
                }, 1000);
            }

            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Pric').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
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

        <script>
            //Inicio do script para editar o modal de editar o producto na divida
            function prodi(product) {
                var Id_product = product.value;

                $.get('http://127.0.0.1:8000/admin/getDebit?Id_product=' + Id_product, function(data) {
                    console.log(data);

                    $('#Priced').val(data.Price);
                });
            }

            function enableField() {
                $('#Priced').prop('disabled', false);

                setTimeout(function() {
                    $('#Priced').prop('disabled', true);
                }, 1000);
            }
        </script>
        <script>
            $(document).ready(function() {
                var fieldsDisabled = localStorage.getItem('fieldsDisabled');
                if (fieldsDisabled) {
                    // Desabilita os campos
                    $('#Priced').val(JSON.parse(fieldsDisabled).Code).prop('disabled', true);
                }
            });
        </script>

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

        {{-- <script>
    //?Inicio do metodo que retorna os productos mais vendidos;
    $(document).ready(function() {
        fetch('/getTopSellingProducts')
            .then(response => response.json())
            .then(data => {
                if (Array.isArray(data)) {
                    const tableBody = $('#top-selling-products-table');
                    tableBody.empty(); // Limpar quaisquer dados existentes

                    data.forEach(product => {
                        const row = `<tr>
                                        <td class="align-middle text-truncate">${product.name}</td>
                                        <td class="align-middle text-center">${product.total_quantity}</td>
                                        <td class="align-middle text-center">
                                            
                                        </td>
                                    </tr>`;
                        tableBody.append(row);
                    });
                } else {
                    console.error('Data received is not an array');
                }
            })
            .catch(error => {
                console.error('Error fetching top selling products:', error);
            });
    });
</script> --}}
        
    {{--Inicio do script responsavel por gerar o valor de troco--}}        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Função para calcular o troco
            function calculateChange() {
                // Obter o valor total e o valor pago
                var totalPrice = parseFloat($("#totalPrice").val());
                var amountPaid = parseFloat($("#amountPaid").val());
                
                // Calcular o troco
                var change = amountPaid - totalPrice;
    
                // Atualizar o campo de troco
                $("#change").val(change.toFixed(2));
            }
    
            // Adicionar um event listener para o input de valor pago
            $("#amountPaid").on("input", function() {
                calculateChange();
            });
        });
    </script>
    {{--Fim do script responsavel por gerar o troco--}}

        <script>
            async function fetchMonthlySalesData() {
                try {
                    const response = await fetch('/getMonthlySales');
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    const data = await response.json();
                    generateMonthlySalesChart(data);
                } catch (error) {
                    console.error('Error fetching monthly sales data:', error);
                }
            }

            function generateMonthlySalesChart(data) {
                var months = [];
                var sales = [];

                data.forEach(function(sale) {
                    months.push(sale.month);
                    sales.push(sale.total_sales);
                });

                var ctx = document.getElementById('monthlySalesChart').getContext('2d');
                var monthlySalesChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Vendas Mensais',
                            data: sales,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            // Chama a função para buscar e gerar o gráfico
            fetchMonthlySalesData();

            $(document).ready(function() {
                // Função para buscar os dados do servidor
                function fetchBestSellingProductsData() {
                    return $.ajax({
                        url: 'http://127.0.0.1:8000/getBestSellingProducts',
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            return response;
                        },
                        error: function(error) {
                            console.error('Erro ao buscar os dados de vendas:', error);
                        }
                    });
                }

                // Inicializa o gráfico Chart.js
                async function initChart() {
                    const salesData = await fetchBestSellingProductsData();

                    const labels = salesData.map(item => item.product_name);
                    const data = salesData.map(item => item.quantity_sold);

                    const ctx = document.getElementById('bestSellingProductsChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Quantidade que Saiu',
                                data: data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(199, 199, 199, 0.2)',
                                    'rgba(83, 102, 255, 0.2)',
                                    'rgba(255, 99, 255, 0.2)',
                                    'rgba(99, 255, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(199, 199, 199, 1)',
                                    'rgba(83, 102, 255, 1)',
                                    'rgba(255, 99, 255, 1)',
                                    'rgba(99, 255, 132, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Produtos Com Mais Saidas'
                                }
                            }
                        }
                    });
                }

                // Chama a função para inicializar o gráfico
                initChart();
            });

            $(document).ready(function() {
                // Inicializa o gráfico Chart.js
                const ctx = document.getElementById('topSellingProductsChart').getContext('2d');
                let topSellingProductsChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Quantidade Vendida',
                            data: [],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Função para buscar e carregar os dados
                function loadData(period) {
                    fetch(`/getTopSellingProducts?period=${period}`)
                        .then(response => response.json())
                        .then(data => {
                            if (Array.isArray(data)) {
                                const tableBody = $('#top-selling-products-table');
                                tableBody.empty(); // Limpar quaisquer dados existentes

                                // Atualiza os dados da tabela
                                data.forEach(product => {
                                    const row = `<tr>
                                            <td class="align-middle text-truncate">${product.name}</td>
                                            <td class="align-middle text-center">${product.total_quantity}</td>
                                            <td class="align-middle text-center">
                                            </td>
                                        </tr>`;
                                    tableBody.append(row);
                                });

                                // Atualiza os dados do gráfico
                                const labels = data.map(product => product.name);
                                const quantities = data.map(product => product.total_quantity);

                                topSellingProductsChart.data.labels = labels;
                                topSellingProductsChart.data.datasets[0].data = quantities;
                                topSellingProductsChart.update();
                            } else {
                                console.error('Data received is not an array');
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching top selling products:', error);
                        });
                }

                // Carregar dados atuais por padrão
                loadData('current');

                // Adicionar event listeners aos botões do dropdown
                $('.dropdown-menu .custom-control-input').on('click', function() {
                    const period = $(this).data('period');
                    loadData(period);
                });
            });

            $(document).ready(function() {
                // Função para buscar os dados do servidor
                function fetchStockData() {
                    return $.ajax({
                        url: 'http://127.0.0.1:8000/getStockQuantities',
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            return response;
                        },
                        error: function(error) {
                            console.error('Erro ao buscar os dados do estoque:', error);
                        }
                    });
                }

                // Inicializa o gráfico Chart.js
                async function initChart() {
                    const stockData = await fetchStockData();

                    const labels = stockData.map(item => item.product_name);
                    const data = stockData.map(item => item.quantity);

                    const ctx = document.getElementById('stockQuantityChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Quantidade em Estoque',
                                data: data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(199, 199, 199, 0.2)',
                                    'rgba(83, 102, 255, 0.2)',
                                    'rgba(255, 99, 255, 0.2)',
                                    'rgba(99, 255, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(199, 199, 199, 1)',
                                    'rgba(83, 102, 255, 1)',
                                    'rgba(255, 99, 255, 1)',
                                    'rgba(99, 255, 132, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Produtos com Maior Quantidade em Estoque'
                                }
                            }
                        }
                    });
                }

                // Chama a função para inicializar o gráfico
                initChart();
            });
        </script>
    </body>

    </html>
@endrole
