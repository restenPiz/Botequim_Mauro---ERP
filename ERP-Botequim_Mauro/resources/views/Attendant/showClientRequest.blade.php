@extends('Layout.Another')
@section('content')
    {{-- Inicio da parte contendo o conteudo dos usuarios --}}
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page-section"></br>
                <!-- grid row -->
                <div class="row">
                    <!-- grid column -->
                    <div class="col-lg-4">
                        <div class="col">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Adicionar Producto na Lista de Pedidos </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{ route('storeClientRequest') }}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Cliente</label>
                                                <select name="Id_client" id="Id_client" class="form-control">
                                                    <option value="{{ $client->id }}" selected>{{ $client->Name_client }}
                                                        {{ $client->Surname }}</option>
                                                </select>
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Producto</label>
                                                <select class="form-control" name="Id_stock" id="Id_product"
                                                    onchange="prod(this);">
                                                    <option>--Selecione o Producto --</option>
                                                    @foreach ($stocks as $product)
                                                        <option value="{{ $product->product->id }}">
                                                            {{ $product->product->Product_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Preco do Producto</label>
                                                <input type="text" class="form-control" placeholder="Preco do Producto"
                                                    id="Price" name="Price" value="" disabled>
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Quantidade</label> <input type="text"
                                                    class="form-control" placeholder="Quantidade" id="input02"
                                                    name="Quantity" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto"
                                            onclick="enableFields()">Adicionar Pedido</button>
                                        <a href="{{ route('addClientRequest') }}" type="button" class="btn btn-light"
                                            data-dismiss="modal">Voltar</a>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>

                    {{-- Inicio da tabela de todos clientes --}}

                    <div class="col-lg-8">
                        <div class="col">
                            <!-- .invoice-wrapper -->
                            <div class="card" style="width: 70%;">
                                <!-- .invoice-actions -->
                                <div class="invoice-actions">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-lg btn-secondary rounded-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-caret-down"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-1"></div><button type="button" id="download-pdf"
                                                class="dropdown-item">Download PDF</button>
                                            <button type="button" class="dropdown-item">Share...</button>
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
                                                    <img src="/../assets/logo1.png" width="250" height="150" alt=""> 
                                                </h2>
                                            </div><!-- /.col -->
                                            <!-- .col -->
                                            <div class="col">
                                                <table class="table table-borderless table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <small>Numero de Pedido</small><br>
                                                                <h5> INV</h5>
                                                            </td>
                                                            <td>
                                                                <small>Data de Criacao</small><br>
                                                                <h5>  </h5>
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
                                                        <dd> Distrito de Mossurize, Provincia de Manica<br> 
                                                        </dd>
                                                    </dl>
                                                </div><!-- /.invoice-recipient -->
                                            </div><!-- /.col -->
                                            <!-- .col -->
                                            <div class="col">
                                                <!-- .invoice-recipient -->
                                                <div class="invoice-recipient">
                                                    <dl>
                                                        <dt> Para: </dt>
                                                        <dd> {{$client->Name_client}} </dd>
                                                        <dd> {{$client->Household}} </dd>
                                                    </dl>
                                                </div><!-- /.invoice-recipient -->
                                            </div><!-- /.col -->
                                        </div><!-- /grid row -->
                                        <table class="table table-sm">
                                            <caption class="invoice-title">
                                                <span>Lista de Pedidos</span><br>
                                                {{-- <span class="text-primary">Looper Admin Theme Custom
                                                    Design</span> --}}
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 375px"> Nome do Producto </th>
                                                    <th class="text-right"> Quantidade </th>
                                                    <th> Price </th>
                                                    <th class="text-right"> Valor (MT) </th>
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
                                                    <th class="text-right">1000 MT </th>
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
                                            <strong>Thanks for buying or notes</strong>. Please click button
                                            with caret down icon above to generate and download this invoice in
                                            pdf format.
                                        </p>
                                    </div><!-- /.invoice-footer -->
                                </div><!-- /.invoice -->
                            </div><!-- /.invoice-wrapper -->
                        </div>
                        {{-- Fim da parte de butao de pagar --}}
                    </div>
                </div>


                {{-- Fim da tabela de todos clientes --}}
            </div>
        </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
