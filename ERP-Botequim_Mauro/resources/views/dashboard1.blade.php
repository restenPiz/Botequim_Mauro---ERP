@extends('Layout.topBar')
@section('content')
    {{-- Inicio da parte de vendas do atendente --}}

    <main class="app-main">
        <!-- .wrapper -->

        <div class="wrapper">
            <!-- .page -->
            <div class="page-section"></br>
                <!-- grid row -->

                <div class="row">
                    <!-- grid column -->

                    <div class="col-lg-4">
                        <form method="post" action="{{ route('storeClientRequest') }}">
                            @csrf
                            <div class="col">
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <h6 class="card-header"> Selecione o Producto </h6><!-- .card-body -->
                                    <div class="card-body">
                                        <!-- form -->

                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Producto</label>
                                                <select class="form-control" name="Id_stock" id="Id_product"
                                                    onchange="prod(this);">
                                                    <option>--Selecione o Producto --</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Preco do Producto</label>
                                                <input type="text" class="form-control" placeholder="Preco do Producto"
                                                    id="Price" name="Product_price" value="" disabled>
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Quantidade</label> <input type="text"
                                                    class="form-control" placeholder="Quantidade" id="input02"
                                                    name="Quantity" required="">
                                            </div><!-- /form column -->
                                        </div>

                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div>
                            <div class="col">
                                <!-- .card -->
                                <div class="card card-fluid">
                                    {{-- <h6 class="card-header"> Adicionar Producto </h6><!-- .card-body --> --}}
                                    <div class="card-body">
                                        <!-- form -->
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Tipo de Pagamento</label>
                                                <select class="form-control" name="Id_stock" id="Id_product"
                                                    onchange="prod(this);">
                                                    <option>--Selecione o Tipo de Pagamento --</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Valor a Pagar</label> <input type="text"
                                                    class="form-control" placeholder="Valor a Pagar" id="input02"
                                                    name="Quantity" required="">
                                            </div><!-- /form column -->
                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div>
                            <div class="col">
                                <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto"
                                    onclick="enableField()">Adicionar Producto</button>
                            </div>
                        </form>
                    </div>

                    {{-- Inicio da tabela de todos clientes --}}

                    <div class="col-lg-8">
                        <div class="col">
                            <header class="page-title-bar">
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button>
                                <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Lista de Vendas </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <a href="" type="button" class="btn btn-light"><i
                                                class="oi oi-data-transfer-download"></i> <span
                                                class="ml-1">Imprimir</span></a>
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
                                                    <th> Quantidade </th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">
                                                    </td>
                                                    <td class="align-middle"> MT</td>
                                                    <td class="align-middle"> </td>
                                                    <td class="align-middle">
                                                        <span class="badge badge-subtle badge-danger">Nao Pago</span>
                                                    </td>
                                                    <td class="align-middle text-right">
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                            data-toggle="modal" data-target="#clientNewModal"><i
                                                                class="fa fa-pencil-alt"></i> <span
                                                                class="sr-only">Edit</span></button>
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="far fa-trash-alt" data-target="#deleteRecordModal"
                                                                data-toggle="modal"></i> <span
                                                                class="sr-only">Remove</span></button>
                                                    </td>
                                                </tr>
                                                {{-- Fim do modal de editar --}}
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="align-middle">
                                                        <h5>Valor Total:</h5>
                                                    </td>
                                                    <td class="align-middle">
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            {{-- Inicio da parte de butao de pagar --}}
                            <div class="col">
                                <button type="submit" name="submit" class="btn btn-success text-nowrap ml-auto"
                                    onclick="enableField()">Concluir Venda</button>
                            </div>
                            {{-- Fim da parte de butao de pagar --}}
                        </div>
                    </div>


                    {{-- Fim da tabela de todos clientes --}}
                </div>
            </div>
        </div>

        {{-- Fim da parte de vendas do atendente --}}
    @endsection
