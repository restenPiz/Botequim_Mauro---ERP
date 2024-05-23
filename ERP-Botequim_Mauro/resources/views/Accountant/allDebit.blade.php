@extends('Layout.topBar')
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
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todas Dividas </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <button type="button" class="btn btn-light"><i
                                                class="oi oi-data-transfer-download"></i> <span
                                                class="ml-1">Exportar</span></button> 
                                                {{-- <button type="button"
                                            class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
                                                class="ml-1">Importar</span></button>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-light"
                                                data-toggle="dropdown"><span>Mais</span> <span
                                                    class="fa fa-caret-down"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-arrow"></div><a href="#"
                                                    class="dropdown-item">Add tasks</a> <a href="#"
                                                    class="dropdown-item">Invite members</a>
                                                <div class="dropdown-divider"></div><a href="#"
                                                    class="dropdown-item">Share</a> <a href="#"
                                                    class="dropdown-item">Archive</a> <a href="#"
                                                    class="dropdown-item">Remove</a>
                                            </div>
                                        </div> --}}
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
                                        <table class="table table-striped" style="min-width: 678px">
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

                                {{-- <div class="card-footer">
                                    <a href="{{route('addProduct')}}" class="card-footer-item"><i
                                            class="fa fa-plus-circle mr-1"></i> Adicionar Producto</a>
                                </div> --}}

                            </div>
                            {{--Inicio da parte de butao de pagar--}}
                            {{-- <div class="col">
                                <button type="submit" name="submit"
                                class="btn btn-success text-nowrap ml-auto"
                                data-toggle="modal" data-target="#clientNewModal">Pagar Divida</button>
                                <a href="{{route('deleteAllDebit')}}" type="submit" name="submit"
                                class="btn btn-danger text-nowrap ml-auto">Eliminar Todos Productos</a>
                            </div> --}}
                            {{--Fim da parte de butao de pagar--}}
                        </div>
                    </div>


                    {{-- Fim da tabela de todos clientes --}}
                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
