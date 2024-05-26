@extends('Layout.topBar')
@section('content')
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                    {{-- <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <div class="d-flex flex-column flex-md-row">
                            <p class="lead">
                                <span class="font-weight-bold">Bem Vindo, {{ Auth::user()->name }}.</span> <span
                                    class="d-block text-muted">Desfrute desse magnifico sistema!</span>
                            </p>
                            <div class="ml-auto">
                            </div>
                        </div>
                    </header><!-- /.page-title-bar --> --}}
                    <!-- .page-section -->
                    <header class="page-title-bar">
                        <div class="d-flex flex-column flex-md-row">
                            <p class="lead">
                                <span class="font-weight-bold">Relatório sobre productos</span>
                                <span class="d-block text-muted"></span>
                            </p>
                            <div class="ml-auto">
                                <div class="row">
                                    <!-- Dropdown para selecionar o período -->
                                    <div class="dropdown" style="margin-right: 0.3rem">
                                        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Esta Semana</span> <i class="fa fa-fw fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                                            <div class="dropdown-arrow"></div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="dpToday" name="period" data-period="week">
                                                <label class="custom-control-label d-flex justify-content-between" for="dpToday">
                                                    <span>Esta Semana</span> <span class="text-muted"></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="dpYesterday" name="period" data-period="month">
                                                <label class="custom-control-label d-flex justify-content-between" for="dpYesterday">
                                                    <span>Último Mês</span> <span class="text-muted"></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="dpWeek" name="period" data-period="current" checked>
                                                <label class="custom-control-label d-flex justify-content-between" for="dpWeek">
                                                    <span>Dados Atuais</span> <span class="text-muted"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botão para exportar -->
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Exportar</span> <i class="fa fa-fw fa-caret-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="page-section">
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
                                <div class="card card-fluid">
                                    <!-- .card-body -->
                                    <div class="card-body">
                                        <h3 class="card-title mb-4"> Grafico sobre as quantidades dos productos </h3>
                                        <div class="chartjs" style="height: 300px">
                                            {{-- <canvas id="completion-tasks"></canvas> --}}
                                            
                                            <canvas id="stockQuantityChart" width="400" height="200"></canvas>

                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div><!-- /grid column -->
                            

                            <div class="col-xl-8">
                                <div class="card card-fluid">
                                    <!-- .card-body -->
                                    <div class="card-body">
                                        <h3 class="card-title mb-4"> Grafico sobre productos com mais saidas </h3>
                                        <div class="chartjs" style="height: 300px">
                                            {{-- <canvas id="completion-tasks"></canvas> --}}
                                            
                                            {{-- <canvas id="stockQuantityChart" width="400" height="200"></canvas> --}}
                                            <canvas id="bestSellingProductsChart" width="400" height="200"></canvas>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div><!-- /grid column -->
                        </div>
                    </div><!-- /grid row -->
                </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
        </div>
        <!-- /.wrapper -->
    </main><!-- /.app-main -->
@endsection
