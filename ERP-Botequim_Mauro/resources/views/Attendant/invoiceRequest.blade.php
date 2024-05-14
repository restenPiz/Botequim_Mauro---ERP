@extends('Layout.Another')
@section('content')
    {{-- inicio do recibo de pedidos --}}

    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper" style="width: 55rem;height:150vh">
            <!-- .page -->
            <div class="page ">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <!-- .breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href=""><i
                                            class="breadcrumb-icon fa fa-angle-left mr-2"></i>Voltar</a>
                                </li>
                            </ol>
                        </nav><!-- /.breadcrumb -->
                        <div class="d-md-flex">
                            <h1 class="page-title"> INV-65D9E592 </h1>
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary">Efectuar Pagamento</button>
                            </div>
                        </div>
                    </header><!-- /.page-title-bar -->
                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <!-- .invoice-wrapper -->
                            <div class="invoice-wrapper">
                                <!-- .invoice-actions -->
                                <div class="invoice-actions">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-lg btn-secondary rounded-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-caret-down"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-1"></div><button type="button" id="download-pdf"
                                                class="dropdown-item">Download PDF</button> <button type="button"
                                                class="dropdown-item">Share...</button>
                                            <div class="dropdown-divider"></div><button type="button"
                                                class="dropdown-item">Mark as paid</button>
                                        </div>
                                    </div>
                                </div><!-- /.invoice-actions -->
                                <!-- .invoice -->
                                <div id="invoice" class="invoice" data-id="INV-65D9E592">
                                    <!-- .invoice-header -->
                                    <div class="invoice-header">
                                        <!-- grid row -->
                                        <div class="row">
                                            <!-- .col -->
                                            <div class="col d-flex">
                                                <h2 class="invoice-brand align-self-center">
                                                    <img src="/../assets/logo1.png" width="300" alt="">
                                                </h2>
                                            </div><!-- /.col -->
                                            <!-- .col -->
                                            <div class="col">
                                                <table class="table table-borderless table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <small>Total (MT)</small>
                                                                <h5> {{$count}} MT </h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <small>Invoice No</small><br>
                                                                <h5> INV-65D9E592 </h5>
                                                            </td>
                                                            <td>
                                                                <small>Due Date</small><br>
                                                                <h5> Jan 18, 2019 </h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.col -->
                                        </div><!-- /grid row -->
                                    </div><!-- /.invoice-header -->
                                    <!-- .invoice-body -->
                                    <div class="invoice-body">
                                        <!-- grid row -->
                                        <div class="row">
                                            <!-- .col -->
                                            <div class="col">
                                                <!-- .invoice-sender -->
                                                <div class="invoice-sender">
                                                    <dl>
                                                        <dt> De: </dt>
                                                        <dd> Botequim Mauro </dd>
                                                        <dd> Espungabera<br> Provincia de Manica </dd>
                                                    </dl>
                                                </div><!-- /.invoice-recipient -->
                                            </div><!-- /.col -->
                                            <!-- .col -->
                                            <div class="col">
                                                <!-- .invoice-recipient -->
                                                <div class="invoice-recipient">
                                                    <dl>
                                                        <dt> Direcionado para: </dt>
                                                        <dd> {{$clients->Name_client}} </dd>
                                                        <dd> {{$clients->Household}} </dd>
                                                    </dl>
                                                </div><!-- /.invoice-recipient -->
                                            </div><!-- /.col -->
                                        </div><!-- /grid row -->
                                        <table class="table table-sm">
                                            <caption class="invoice-title">
                                                <span>Lista de Pedidos - </span><span class="text-primary">Botequim Mauro</span>
                                                
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 375px"> Productos </th>
                                                    <th class="text-right"> Qty </th>
                                                    <th> Price </th>
                                                    <th class="text-right"> Valor (MT) </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($requests as $request)
                                                    <tr>
                                                        <td> {{ $request->products->product->Product_name }} </td>
                                                        <td class="text-right"> {{ $request->Quantity }} </td>
                                                        <td> {{ $request->Product_price }} MT </td>
                                                        <td class="text-right"> {{ $request->Product_price * $request->Quantity }} MT </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot class="table-borderless">
                                                <tr>
                                                    <th colspan="2"></th>
                                                    <th> Total </th>
                                                    <th class="text-right"> {{$count}} MT </th>
                                                </tr>
                                                {{-- <tr>
                                                    <th colspan="2"></th>
                                                    <th> Coupon </th>
                                                    <th class="text-right"> $100,00 </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2"></th>
                                                    <th> Due </th>
                                                    <th class="text-right"> $3.096,00 </th>
                                                </tr> --}}
                                            </tfoot>
                                        </table>
                                    </div><!-- /.invoice-body -->
                                    <!-- .invoice-footer -->
                                    <div class="invoice-footer">
                                        <p>
                                            <strong>Thanks for buying or notes</strong>. Please click button with caret down
                                            icon above to generate and download this invoice in pdf format.
                                        </p>
                                    </div><!-- /.invoice-footer -->
                                </div><!-- /.invoice -->
                            </div><!-- /.invoice-wrapper -->
                        </div><!-- /.section-block -->
                    </div><!-- /.page-section -->
                </div><!-- /.page-inner -->
                <!-- .page-sidebar -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </main> {{-- Fim do recibo de pedidos --}}
@endsection
