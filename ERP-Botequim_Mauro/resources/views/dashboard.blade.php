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
                                    <!-- .dropdown -->
                                    {{-- <div class="dropdown">
                                    <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><span>Esta Semana</span> <i
                                            class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                                        <div class="dropdown-arrow"></div><!-- .custom-control -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="dpToday"
                                                name="dpFilter" data-start="2019/03/27" data-end="2019/03/27">
                                            <label class="custom-control-label d-flex justify-content-between"
                                                for="dpToday"><span>Today</span> <span class="text-muted">Mar
                                                    27</span></label>
                                        </div><!-- /.custom-control -->
                                        <!-- .custom-control -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="dpYesterday"
                                                name="dpFilter" data-start="2019/03/26" data-end="2019/03/26">
                                            <label class="custom-control-label d-flex justify-content-between"
                                                for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar
                                                    26</span></label>
                                        </div><!-- /.custom-control -->
                                        <!-- .custom-control -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="dpWeek"
                                                name="dpFilter" data-start="2019/03/21" data-end="2019/03/27" checked>
                                            <label class="custom-control-label d-flex justify-content-between"
                                                for="dpWeek"><span>This Week</span> <span class="text-muted">Mar
                                                    21-27</span></label>
                                        </div><!-- /.custom-control -->
                                        <!-- .custom-control -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="dpMonth"
                                                name="dpFilter" data-start="2019/03/01" data-end="2019/03/27">
                                            <label class="custom-control-label d-flex justify-content-between"
                                                for="dpMonth"><span>This Month</span> <span class="text-muted">Mar
                                                    1-31</span></label>
                                        </div><!-- /.custom-control -->
                                        <!-- .custom-control -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="dpYear"
                                                name="dpFilter" data-start="2019/01/01" data-end="2019/12/31">
                                            <label class="custom-control-label d-flex justify-content-between"
                                                for="dpYear"><span>This Year</span> <span
                                                    class="text-muted">2019</span></label>
                                        </div><!-- /.custom-control -->
                                        <!-- .custom-control -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="dpCustom"
                                                name="dpFilter" data-start="2019/03/27" data-end="2019/03/27">
                                            <label class="custom-control-label" for="dpCustom">Custom</label>
                                            <div class="custom-control-hint my-1">
                                                <!-- datepicker:range -->
                                                <input type="text" class="form-control" id="dpCustomInput"
                                                    data-toggle="flatpickr" data-mode="range" data-disable-mobile="true"
                                                    data-date-format="Y-m-d">
                                                <!-- /datepicker:range -->
                                            </div>
                                        </div><!-- /.custom-control -->
                                    </div><!-- /.dropdown-menu -->
                                </div><!-- /.dropdown --> --}}
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
                                        <div class="chartjs" style="height: 292px">
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
                                                    <strong class="h3">{{$troco}}</strong> <span class="text-muted">MT</span>
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
