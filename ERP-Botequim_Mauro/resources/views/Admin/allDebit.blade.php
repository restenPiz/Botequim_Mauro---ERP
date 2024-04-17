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
                                <h6 class="card-header"> Adicionar Divida </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{ route('storeDebit') }}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Cliente</label> 
                                                <select name="Id_client" id="Id_client" class="form-control">
                                                        <option value="{{$client->id}}" selected>{{$client->Name_client}} {{$client->Surname}}</option>
                                                    </select>
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Producto</label> 
                                                <select class="form-control" name="Id_product" id="Id_product" onchange="prod(this);">
                                                    <option>--Selecione o Producto --</option>
                                                    @foreach ($products as $product)
                                                    <option value="{{$product->id}}">{{$product->Product_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Preco do Producto</label> 
                                                <input type="text"
                                                    class="form-control" placeholder="Preco do Producto" id="Price"
                                                    name="Price" value="" disabled>
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Data de Pagamento</label> <input type="date"
                                                    class="form-control" placeholder="Value" id="input02"
                                                    name="Date_to_pay" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <button type="submit" name="submit"
                                            class="btn btn-primary text-nowrap ml-auto" onclick="enableFields()">Adicionar Divida</button>
                                        <a href="{{ route('addClient') }}" type="button" class="btn btn-light"
                                            data-dismiss="modal">Voltar</a>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>

                    {{-- Inicio da tabela de todos clientes --}}

                    <div class="col-lg-8">
                        <div class="col">

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todas Dividas de {{$client->Name_client}} {{$client->Surname}} </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <button type="button" class="btn btn-light"><i
                                                class="oi oi-data-transfer-download"></i> <span
                                                class="ml-1">Exportar</span></button> <button type="button"
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
                                        </div>
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
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($debits as $debit)
                                                <tr>
                                                    <td class="align-middle"> {{ $debit->product->Product_name }} </td>
                                                    <td class="align-middle"> {{ $debit->Price }} MT</td>
                                                    <td class="align-middle"> {{ $debit->Date_to_pay }} </td>
                                                    <td class="align-middle"> 
                                                        <span class="badge badge-subtle badge-danger">Nao Pago</span>
                                                    </td>
                                                    <td class="align-middle text-right">
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                            data-toggle="modal"
                                                            data-target="#clientNewModal{{ $debit->id }}"><i
                                                                class="fa fa-pencil-alt"></i> <span
                                                                class="sr-only">Edit</span></button> <button
                                                            type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="far fa-trash-alt"
                                                                data-target="#deleteRecordModal{{ $debit->id }}"
                                                                data-toggle="modal"></i> <span
                                                                class="sr-only">Remove</span></button>
                                                    </td>
                                                </tr>

                                                {{-- Inicio do modal de eliminar --}}
                                                <div class="modal fade zoomIn" id="deleteRecordModal{{ $debit->id }}"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form action="{{ route('deleteDebit', ['id' => $debit->id]) }}"
                                                                method="get">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-body">
                                                                    <div class="mt-2 text-center">
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                            trigger="loop"
                                                                            colors="primary:#f7b84b,secondary:#f06548"
                                                                            style="width:100px;height:100px">
                                                                        </lord-icon>
                                                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                            <h4>Voce tem certeza ?</h4>
                                                                            <p class="text-muted mx-4 mb-0">Voce pretende
                                                                                eliminar
                                                                                este Producto da Lista de Dividas ?</p>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                        <button type="button" class="btn w-sm btn-light"
                                                                            data-bs-dismiss="modal">Fechar</button>
                                                                        <button type="submit" name="submit"
                                                                            class="btn w-sm btn-danger "
                                                                            id="delete-record">Sim,
                                                                            elimine!</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Fim do modal de eliminar --}}

                                                {{-- Inicio do modal de editar --}}
                                                <div class="modal fade" id="clientNewModal{{ $debit->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                    aria-hidden="true">
                                                    <!-- .modal-dialog -->
                                                    <div class="modal-dialog" role="document">
                                                        <!-- .modal-content -->
                                                        <form action="{{ route('updateDebit', ['id' => $debit->id]) }}"
                                                            method="post">
                                                            @csrf

                                                            <div class="modal-content">
                                                                <!-- .modal-header -->
                                                                <div class="modal-header">
                                                                    <h6 id="clientNewModalLabel"
                                                                        class="modal-title inline-editable">
                                                                        <span class="sr-only">Formulario de Actualizacao
                                                                            de Productos</span>
                                                                    </h6>
                                                                </div><!-- /.modal-header -->
                                                                <!-- .modal-body -->
                                                                <div class="modal-body">
                                                                    <!-- .form-row -->
                                                                    <div class="form-row">
                                                                        <div class="modal-body">
                                                                            <!-- .form-row -->
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="input01">Nome do Cliente</label> 
                                                                                        <select name="Id_client" id="Id_client" class="form-control">
                                                                                            <option value="{{$client->id}}" selected>{{$client->Name_client}} {{$client->Surname}}</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="input01">Nome do Producto</label> 
                                                                                        <select class="form-control" name="Id_product" id="Id_product" onchange="prodi(this);">
                                                                                            <option value="{{$debit->product->id}}">{{$debit->product->Product_name}}</option>
                                                                                            @foreach ($products as $product)
                                                                                            <option value="{{$product->id}}">{{$product->Product_name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactEmail">Preco do Producto</label>
                                                                                        <input type="text"
                                                                                            id="Priced"
                                                                                            class="form-control"
                                                                                            name="Price"
                                                                                            value="{{ $debit->Price }}" disabled>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="input02">Data de Pagamento</label> <input type="date"
                                                                                            class="form-control" value="{{$debit->Date_to_pay}}" id="input02"
                                                                                            name="Date_to_pay" required="">
                                                                                    </div>
                                                                                    <input type="hidden"
                                                                                        name="client_type" value="debit">
                                                                                </div>
                                                                            </div><!-- /.form-row -->

                                                                        </div><!-- /.modal-body -->
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $debit->id }}">
                                                                    </div><!-- /.form-row -->

                                                                </div><!-- /.modal-body -->
                                                                <!-- .modal-footer -->
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-primary" onclick="enableField()">Actualizar
                                                                        Cliente</button>
                                                                    <button type="button" class="btn btn-light"
                                                                        data-dismiss="modal">Fechar</button>
                                                                </div><!-- /.modal-footer -->
                                                            </div><!-- /.modal-content -->
                                                        </form>
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                                @endforeach
                                                {{-- Fim do modal de editar --}}
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="align-middle"><h5>Valor da Divida:</h5></td>
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
                            <button type="submit" name="submit"
                            class="btn btn-success text-nowrap ml-auto" onclick="enableField()">Pagar Divida</button>
                            {{--Fim da parte de butao de pagar--}}
                        </div>
                    </div>


                    {{-- Fim da tabela de todos clientes --}}
                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
