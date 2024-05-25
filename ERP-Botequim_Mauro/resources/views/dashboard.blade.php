@extends('Layout.topBar')
@section('content')
    @role('admin')
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
                                    <div class="col-lg-9">
                                        <div class="metric-row metric-flush">
                                            <!-- metric column -->
                                            <div class="col">
                                                <!-- .metric -->
                                                <a href="user-teams.html" class="metric metric-bordered align-items-center">
                                                    <h2 class="metric-label"> Clientes </h2>
                                                    <p class="metric-value h3">
                                                        <sub><i class="oi oi-people"></i></sub> <span class="value">{{$clients}}</span>
                                                    </p>
                                                </a> <!-- /.metric -->
                                            </div><!-- /metric column -->
                                            <!-- metric column -->
                                            <div class="col">
                                                <!-- .metric -->
                                                <a href="user-projects.html" class="metric metric-bordered align-items-center">
                                                    <h2 class="metric-label"> Productos </h2>
                                                    <p class="metric-value h3">
                                                        <sub><i class="oi oi-fork"></i></sub> <span class="value">{{$products}}</span>
                                                    </p>
                                                </a> <!-- /.metric -->
                                            </div><!-- /metric column -->
                                            <!-- metric column -->
                                            <div class="col">
                                                <!-- .metric -->
                                                <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                                                    <h2 class="metric-label"> Productos no stock </h2>
                                                    <p class="metric-value h3">
                                                        <sub><i class="fa fa-tasks"></i></sub> <span class="value">{{$stock_in}}</span>
                                                    </p>
                                                </a> <!-- /.metric -->
                                            </div><!-- /metric column -->
                                        </div>
                                    </div><!-- metric column -->
                                    <div class="col-lg-3">
                                        <!-- .metric -->
                                        <a href="user-tasks.html" class="metric metric-bordered">
                                            <div class="metric-badge">
                                                <span class="badge badge-lg badge-success"><span
                                                        class="oi oi-media-record pulse mr-1"></span>Clientes com dividas</span>
                                            </div>
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-timer"></i></sub> <span class="value">{{$debits}}</span>
                                            </p>
                                        </a> <!-- /.metric -->
                                    </div><!-- /metric column -->
                                </div><!-- /metric row -->
                            </div><!-- /.section-block -->
                            <!-- grid row -->
                            <div class="row">

                                {{-- Inicio dos graficos de relatorios --}}
                                <div class="col-xl-8">
                                    <div class="card card-fluid">
                                        <!-- .card-body -->
                                        <div class="card-body">
                                        <h3 class="card-title mb-4"> Relatorio de Vendas </h3>
                                        <div class="chartjs" style="height: 300px">
                                            <canvas id="completion-tasks"></canvas>
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
                                                    <span class="mr-2">Entrada de Productos</span> <small class="text-success"><i
                                                            class="fa fa-caret-up"></i> {{$stock_in}}</small>
                                                </dt>
                                                {{-- <dd class="text-right mb-0">
                                                    <strong>17,400</strong> <small class="text-muted">USD</small>
                                                </dd> --}}
                                            </dl>
                                            <dl class="d-flex justify-content-between mb-0">
                                                <dt class="text-left">
                                                    <span class="mr-2">Saida de Productos</span> <small class="text-success"><i
                                                            class="fa fa-caret-up"></i> {{$stock_out}}</small>
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
                                                    <strong class="h3">{{number_format($troco,2)}}</strong> <span class="text-muted">MZN</span>
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
    @endrole

@endsection
