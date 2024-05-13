@extends('Layout.Another')
@section('content')
    {{-- inicio do recibo de pedidos --}}

        <!-- .page -->
        <div class="">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="page-invoices.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Invoices</a>
                            </li>
                        </ol>
                    </nav><!-- /.breadcrumb -->
                    <div class="d-md-flex">
                        <h1 class="page-title"> INV-65D9E592 </h1>
                        <div class="ml-auto">
                            <button type="button" class="btn btn-primary">Add payment</button>
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
                                    <button type="button" class="btn btn-lg btn-secondary rounded-0" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span
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
                                                <img src="assets/images/brand-logo.png" width="124" alt=""> <span
                                                    class="sr-only">Invoice Brand</span>
                                            </h2>
                                        </div><!-- /.col -->
                                        <!-- .col -->
                                        <div class="col">
                                            <table class="table table-borderless table-sm">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <small>Amount (USD)</small>
                                                            <h5> $3.096,00 </h5>
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
                                                    <dt> From: </dt>
                                                    <dd> Stilearning </dd>
                                                    <dd> 983 Kunde Glens, Pourosmouth<br> AK 68019-8335 </dd>
                                                </dl>
                                            </div><!-- /.invoice-recipient -->
                                        </div><!-- /.col -->
                                        <!-- .col -->
                                        <div class="col">
                                            <!-- .invoice-recipient -->
                                            <div class="invoice-recipient">
                                                <dl>
                                                    <dt> Billed To: </dt>
                                                    <dd> Ron-tech </dd>
                                                    <dd> 3272 Mills Valleys Suite 412, Port Willis<br> NV 69859 </dd>
                                                </dl>
                                            </div><!-- /.invoice-recipient -->
                                        </div><!-- /.col -->
                                    </div><!-- /grid row -->
                                    <table class="table table-sm">
                                        <caption class="invoice-title">
                                            <span>Invoice</span><br>
                                            <span class="text-primary">Looper Admin Theme Custom Design</span>
                                        </caption>
                                        <thead>
                                            <tr>
                                                <th style="min-width: 375px"> Description </th>
                                                <th class="text-right"> Qty </th>
                                                <th> Price </th>
                                                <th class="text-right"> Amount (USD) </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Create mobile app </td>
                                                <td class="text-right"> 1 </td>
                                                <td> $3.000,00 </td>
                                                <td class="text-right"> $3.000,00 </td>
                                            </tr>
                                            <tr>
                                                <td> Looper Admin Theme (Standard License) </td>
                                                <td class="text-right"> 4 </td>
                                                <td> $49,00 </td>
                                                <td class="text-right"> $196,00 </td>
                                            </tr><!-- fake border -->
                                            <tr>
                                                <td colspan="4"></td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="table-borderless">
                                            <tr>
                                                <th colspan="2"></th>
                                                <th> Total </th>
                                                <th class="text-right"> $3.196,00 </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th> Coupon </th>
                                                <th class="text-right"> $100,00 </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th> Due </th>
                                                <th class="text-right"> $3.096,00 </th>
                                            </tr>
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
            <div class="page-sidebar">
                <!-- .card -->
                <div class="card card-reflow">
                    <div class="card-body">
                        <h4 class="card-title"> Payments </h4>
                        <div class="progress progress-sm rounded-0 mb-1">
                            <div class="progress-bar bg-success w-75" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted text-weight-bolder small"> $2,322 of $3,076 </p>
                    </div><!-- .card-body -->
                    <div class="card-body border-top">
                        <h4 class="card-title"> History </h4><!-- .timeline -->
                        <ul class="timeline timeline-dashed-line">
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice created </h6><span
                                        class="timeline-date">08/18/2018 – 12:42 PM</span>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice sent <a href="#"
                                            class="text-muted"><small>details</small></a>
                                    </h6><span class="timeline-date">08/18/2018 – 12:42 PM</span>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice viewed </h6><span
                                        class="timeline-date">08/19/2018 – 09:11 AM</span>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice partial paid <a href="#"
                                            class="text-muted"><small>details</small></a>
                                    </h6><span class="timeline-date">08/19/2018 – 10:36 AM</span>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice sent <a href="#"
                                            class="text-muted"><small>details</small></a>
                                    </h6><span class="timeline-date">12/21/2018 – 12:42 PM</span>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice viewed </h6>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                            <!-- .timeline-item -->
                            <li class="timeline-item">
                                <!-- .timeline-figure -->
                                <div class="timeline-figure">
                                    <span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
                                </div><!-- /.timeline-figure -->
                                <!-- .timeline-body -->
                                <div class="timeline-body">
                                    <h6 class="timeline-heading"> Invoice fully paid </h6>
                                </div><!-- /.timeline-body -->
                            </li><!-- /.timeline-item -->
                        </ul><!-- /.timeline -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.page-sidebar -->
        </div><!-- /.page -->
    </div>
    {{-- Fim do recibo de pedidos --}}
@endsection
