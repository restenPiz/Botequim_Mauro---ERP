@extends('Layout.top')
@section('content')
    {{-- inicio da view do contabilista --}}
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <div class="d-flex flex-column flex-md-row">
                            <p class="lead">
                                <span class="font-weight-bold">Bem Vindo, {{ Auth::user()->name }}.</span> <span
                                    class="d-block text-muted">Desfrute desse magnifico sistema!</span>
                            </p>
                            <div class="ml-auto">
                            </div>
                        </div>
                    </header><!-- /.page-title-bar -->
                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <!-- metric row -->
                            <div class="metric-row">
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-fork"></i></sub> <span
                                                    class="value">{{ $stock_in }}</span>
                                            </p>
                                            <h2 class="metric-label"> Productos no Stock </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column -->
                                <!-- metric column -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-tasks"></i></sub> <span
                                                    class="value">{{ $prod }}</span>
                                            </p>
                                            <h2 class="metric-label"> Todos Productos </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column -->
                                <!-- metric column -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-timer"></i></sub> <span
                                                    class="value">{{ $stock_out }}</span>
                                            </p>
                                            <h2 class="metric-label"> Productos Vendidos </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column -->
                            </div>
                            {{-- Fim das cards --}}
                        </div>
                        <!-- grid row -->
                        <div class="row">

                            {{-- Inicio dos graficos de relatorios --}}
                            <div class="col-xl-8">
                                <div class="card card-fluid">
                                    <!-- .card-body -->
                                    <div class="card-body">
                                        <h3 class="card-title mb-4"> Grafico sobre os productos mais vendidos </h3>
                                        <div class="chartjs" style="height: 300px">
                                            {{-- <canvas id="completion-tasks"></canvas> --}}
                                            <canvas id="topSellingProductsChart" width="400" height="200"></canvas>

                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div><!-- /grid column -->
                            <!-- grid column -->
                            <div class="col-xl-4">
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <!-- .card-header -->
                                    <div class="card-header"> Relatorios </div><!-- /.card-header -->
                                    <!-- .card-body -->
                                    <div class="card-body">
                                        <dl class="d-flex justify-content-between">
                                            <dt class="text-left">
                                                <span class="mr-2">Entrada de Productos</span> <small
                                                    class="text-success"><i class="fa fa-caret-up"></i>
                                                    {{ $stock_in }}</small>
                                            </dt>
                                            {{-- <dd class="text-right mb-0">
                                                <strong>17,400</strong> <small class="text-muted">USD</small>
                                            </dd> --}}
                                        </dl>
                                        <dl class="d-flex justify-content-between mb-0">
                                            <dt class="text-left">
                                                <span class="mr-2">Saida de Productos</span> <small
                                                    class="text-success"><i class="fa fa-caret-up"></i>
                                                    {{ $stock_out }}</small>
                                            </dt>
                                            {{-- <dd class="text-right mb-0">
                                                <strong>5</strong>
                                            </dd> --}}
                                        </dl>
                                    </div><!-- /.card-body -->
                                    <!-- .card-body -->
                                    <div class="card-body border-top">
                                        <dl class="d-flex justify-content-between">
                                            <dt class="text-left">
                                                <span class="mr-2">Total de Usuarios</span> <small class="text-danger"><i
                                                        class="fa fa-caret-down"></i> 4</small>
                                            </dt>
                                            {{-- <dd class="text-right mb-0">
                                                <strong>1,600</strong> <small class="text-muted">USD</small>
                                            </dd> --}}
                                        </dl>
                                    </div><!-- /.card-body -->
                                    <!-- .card-body -->
                                    <div class="card-body border-top">
                                        <div class="summary">
                                            <p class="text-left">
                                                <strong class="mr-2">Valor total de vendas</strong>
                                                {{-- <small class="text-success"><i --}}
                                                {{-- class="fa fa-caret-up"></i> 24%</small> --}}
                                            </p>
                                            <p class="text-center">
                                                <strong class="h3">{{ $troco }}</strong> <span
                                                    class="text-muted">MT</span>
                                            </p>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div>
                        </div>
                    </div><!-- /grid row -->
                </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer" style="margin-top:-5rem">
            <div class="copyright"> Copyright © 2024. Todos direitos reservados. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
    </main><!-- /.app-main -->

    {{-- Fim da view do contabilista --}}
@endsection
