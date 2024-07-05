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

                    {{-- Inicio da tabela de todos clientes --}}

                    <div class="col-lg-12">
                        <div class="col">

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                {{-- <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action --> --}}
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todas Dividas </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <a href="{{route('export.debts.pdf', $client->id)}}" type="button" class="btn btn-light"><i
                                            class="oi oi-data-transfer-download"></i> <span
                                            class="ml-1">Exportar</span></a>
                                    </div><!-- /.btn-toolbar -->
                                </div><!-- /title and toolbar -->
                            </header><!-- /.page-title-bar -->
                            <!-- .page-section -->

                            {{-- Table section --}}
                            <div class="card mt-4" style="margin-top:-4rem">
                                <!-- .card-body -->
                                <div class="card-body">
                                    {{-- <h2 class="card-title"> Contacts </h2><!-- .table-responsive --> --}}
                                    <div class="table-responsive">
                                        {{-- Inicio da tabela de dividas --}}
                                        <table id="stock-table" class="table table-striped" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Nome de Producto </th>
                                                    <th> Preco </th>
                                                    <th> Data de Pagamento </th>
                                                    <th>Quantidade</th>
                                                    <th>Valor Total</th>
                                                    <th>Nome do Cliente</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($debits as $debit)
                                                <tr>
                                                    <td class="align-middle"> {{ $debit->product->product->Product_name }} </td>
                                                    <td class="align-middle"> {{ $debit->Product_price }} MT</td>
                                                    <td class="align-middle"> {{ $debit->Date_to_pay }} </td>
                                                    <td class="align-middle"> 
                                                        {{$debit->Quantity}}
                                                    </td>
                                                    <td class="align-middle"> 
                                                        {{$debit->Amount}}
                                                    </td>
                                                    <td class="align-middle"> {{ $debit->client->Name_client }} </td>
                                                </tr>

                                                @endforeach
                                                {{-- Fim do modal de editar --}}
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="align-middle"><h5>Valor Total da Divida:</h5></td>
                                                    <td class="align-middle"><h5>{{$count}} MT</h5></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    {{-- Fim da tabela de todos clientes --}}
                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
