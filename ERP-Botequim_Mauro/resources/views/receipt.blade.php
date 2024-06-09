{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Venda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .receipt-header, .receipt-footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .receipt-details {
            margin-bottom: 20px;
        }
        .receipt-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .receipt-details th, .receipt-details td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="receipt-header">
        <h1>Recibo de Venda</h1>
        <p>Nome da Loja</p>
        <p>Endereço da Loja</p>
        <p>Telefone: (XX) XXXX-XXXX</p>
    </div>
    <div class="receipt-details">
        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>{{ $sale->stocks->product->Product_name }}</td>
                <td>{{ $sale->Quantity }}</td>
                <td>{{ $sale->Product_price }}</td>
                <td>{{ $sale->Amount }}</td>
            </tr>
        </table>
    </div>
    <div class="receipt-footer">
        <p>Data: {{ $sale->created_at }}</p>
        <p>Obrigado pela sua compra!</p>
    </div>
    <script>
        window.onload = function() {
            window.print();
            setTimeout(function() {
                window.location.href = "{{ route('dashboard') }}";
            }, 2000); // Redireciona após 2 segundos
        }
    </script>
</body>
</html> --}}


<html>
    <head>
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
        </script><!-- END THEME STYLES -->
    </head>
    <body>
        <main class="app-main">
            <div class="wrapper" style="width: 55rem;height:150vh">
                <div class="page">
                    <div class="page-inner">
                        <header class="page-title-bar">
                            <div class="d-md-flex">
                                <h1 class="page-title"> Recibo de Pagamento </h1>   
                            </div>
                        </header>
    
                        <div class="page-section">
                            <div class="section-block">
                                <div class="invoice-wrapper">
                                    
                                    <div id="invoice" class="invoice" data-id="INV-65D9E592">
                                        <div class="invoice-header">
                                            <div class="row">
                                                <div class="col d-flex">
                                                    <h2 class="invoice-brand align-self-center">
                                                        <img src="/../assets/logo1.png" width="300" alt="">
                                                    </h2>
                                                </div>
                                                <div class="col">
                                                    <table class="table table-borderless table-sm">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <small>Total (MT)</small>
                                                                    <h5>{{ $total }} MT</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <small>Invoice No</small><br>
                                                                    <h5>INV-65D9E592</h5>
                                                                </td>
                                                                <td>
                                                                    <small>Due Date</small><br>
                                                                    <h5>{{ \Carbon\Carbon::now()->format('M d, Y') }}</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="invoice-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="invoice-sender">
                                                        <dl>
                                                            <dt>De:</dt>
                                                            <dd>Botequim Mauro</dd>
                                                            <dd>Espungabera<br>Provincia de Manica</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="invoice-recipient">
                                                        <dl>
                                                            <dt>Direcionado para:</dt>
                                                            <dd>User</dd>
                                                            <dd>Mossurize</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-sm">
                                                <caption class="invoice-title">
                                                    <span>Lista de Productos - </span><span class="text-primary">Botequim Mauro</span>
                                                </caption>
                                                <thead>
                                                    <tr>
                                                        <th style="min-width: 375px">Productos</th>
                                                        <th class="text-right">Qty</th>
                                                        <th>Price</th>
                                                        <th class="text-right">Valor (MT)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sales as $sale)
                                                        <tr>
                                                            <td>{{ $sale->stocks->product->Product_name }}</td>
                                                            <td class="text-right">{{ $sale->Quantity }}</td>
                                                            <td>{{ $sale->Product_price }} MT</td>
                                                            <td class="text-right">{{ $sale->Amount }} MT</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot class="table-borderless">
                                                    <tr>
                                                        <th colspan="2"></th>
                                                        <th>Total</th>
                                                        <th class="text-right">{{ $total }} MT</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2"></th>
                                                        <th>IVA</th>
                                                        <th class="text-right">19 %</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2"></th>
                                                        <th>Troco</th>
                                                        <th class="text-right">{{ $troco }} MT</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
    
                                        <div class="invoice-footer">
                                            <p><strong>Obrigado pela sua compra!</strong> Por favor, clique no botão com o ícone de seta para baixo acima para gerar e baixar esta fatura em formato PDF.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
    </body>

    <script>
        window.onload = function() {
            window.print();
            setTimeout(function() {
                window.location.href = "{{ route('dashboard') }}";
            }, 3000); // Redireciona após 2 segundos
        }
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
    
    <script src="../assets/vendor/es6-promise/es6-promise.auto.min.js"></script>
    <script src="../assets/vendor/jspdf/jspdf.min.js"></script>
    <script src="../assets/vendor/html2canvas/html2canvas.min.js"></script>
    <script src="../assets/vendor/html2pdf.js/html2pdf.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="../assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    
    <script src="../assets/javascript/pages/invoice-demo.js"></script> <!-- END PAGE LEVEL JS -->
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

</html>