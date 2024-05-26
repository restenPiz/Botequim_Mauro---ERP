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
                            <span class="font-weight-bold">Relatorio sobre vendas</span> <span class="d-block text-muted"></span>
                          </p>
                          <div class="ml-auto">
                            <!-- .dropdown -->
                            <div class="row">
                            <div class="dropdown" style="margin-right: 0.3rem">
                              <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Esta Semana</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                                <div class="dropdown-arrow"></div><!-- .custom-control -->
                                <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpToday"><span>Esta Semana</span> <span class="text-muted">Mar 27</span></label>
                                </div><!-- /.custom-control -->
                                <!-- .custom-control -->
                                <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter" data-start="2019/03/26" data-end="2019/03/26"> <label class="custom-control-label d-flex justify-content-between" for="dpYesterday"><span>Último Mês</span> <span class="text-muted">Mar 26</span></label>
                                </div><!-- /.custom-control -->
                                <!-- .custom-control -->
                                <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" data-start="2019/03/21" data-end="2019/03/27" checked> <label class="custom-control-label d-flex justify-content-between" for="dpWeek"><span>Dados Atuais</span> <span class="text-muted">Mar 21-27</span></label>
                                </div><!-- /.custom-control -->
                                
                              </div><!-- /.dropdown-menu -->
                            </div><!-- /.dropdown -->

                            {{--Inicio do butao responsavel por baixar o pdf--}}
                            <div class="dropdown">
                                <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Exportar</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                            </div>
                            {{--Fim do butao--}}
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
                                        <h3 class="card-title mb-4"> Grafico sobre a quantidade de vendas efectuadas </h3>
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
                                                <strong class="h3">{{ number_format($troco, 2) }}</strong> <span
                                                    class="text-muted">MZN</span>
                                            </p>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div>


                            {{-- Inicio da tabela de productos mais vendidos --}}
                            <div class="col-xl-8">
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <!-- .card-header -->
                                    <div class="card-header border-0">
                                        <!-- .d-flex -->
                                        <div class="d-flex align-items-center">
                                            <span class="mr-auto">Productos mais vendidos</span>
                                            <!-- .card-header-control -->
                                            <div class="card-header-control">
                                                <!-- .dropdown -->
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-icon btn-light"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-arrow"></div><a href="#"
                                                            class="dropdown-item">Actions</a> <a href="#"
                                                            class="dropdown-item">Goes here</a> <a href="#"
                                                            class="dropdown-item">Remove</a>
                                                    </div>
                                                </div><!-- /.dropdown -->
                                            </div><!-- /.card-header-control -->
                                        </div><!-- /.d-flex -->
                                    </div><!-- /.card-header -->
                                    <!-- .table-responsive -->
                                    <div class="table-responsive">
                                        <!-- .table -->
                                        <table class="table">
                                            <!-- thead -->
                                            <thead>
                                                <tr>
                                                    <th style="min-width:260px"> Nome do Producto </th>
                                                    <th class="text-center"> Quantidade </th>
                                                    <th class="text-right" style="min-width:142px">  </th>
                                                </tr>
                                            </thead><!-- /thead -->
                                            <!-- tbody -->
                                            <tbody id="top-selling-products-table">
                                                <!-- tr -->
                                                {{-- <tr>
                                                    <td class="align-middle text-truncate">
                                                        <a href="#" class="tile bg-blue text-white mr-2">BA</a> <a
                                                            href="#">Booking App</a>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="badge bg-blue text-white">35%</span>
                                                    </td>
                                                    <td class="align-middle text-center"> 35:28 </td>
                                                </tr><!-- /tr --> --}}
                                                <!-- /tr -->
                                            </tbody><!-- /tbody -->
                                        </table><!-- /.table -->
                                    </div>
                                </div><!-- /.card -->
                            </div>
                        </div>
                        {{-- Fim da tabela de productos mais vendidos --}}

                    </div><!-- /grid row -->
                </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
        </div>
        <!-- /.wrapper -->
    </main><!-- /.app-main -->
@endsection
