@extends('Layout.top')
@section('content')

    @role('admin')
{{-- Inicio da parte contendo o conteudo dos usuarios --}}
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page-section"></br>
            <!-- grid row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="col">
                        <!-- .card -->
                        <div class="card card-fluid">
                            <h6 class="card-header"> Adicionar Entrada </h6><!-- .card-body -->
                            <div class="card-body">
                                <!-- form -->
                                <form method="post" action="{{route('storeStock')}}">
                                    @csrf
                                    <!-- form row -->
                                    <div class="form-row">
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label>Nome de Producto</label>
                                            {{--Inicio do input de selecao de Productos--}}
                                            <select class="form-control @error('Id_product') is-invalid @enderror" required name="Id_product" id="Product_name" onchange="productos(this);">
                                                <option>--Selecione o Produto--</option>
                                                @foreach ($products as $stock)
                                                    <option value="{{ $stock->id }}">{{ $stock->Product_name }}</option>
                                                @endforeach
                                            </select> 
                                            @error('Id_product')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            {{--Fim do input de selecao--}}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="input02">Quantidade</label> 
                                            <input type="text" value="" class="form-control" id="Quantity" placeholder="Quantidade" name="Quantity" disabled required>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input01">Codigo de Barra</label> 
                                            <input type="text" value="" class="form-control" id="Code" placeholder="Codigo de Barra" name="Code" disabled required>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input02">Preco do Produto</label> 
                                            <input type="text" value="" class="form-control" id="Price" placeholder="Preco do Produto"  name="Price" disabled required>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input01">Data de Entrada</label> 
                                            <input type="date" value="" class="form-control" id="Entry_date" name="Entry_date" disabled required>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input01">Data de Validade</label> 
                                            <input type="date" value="" class="form-control" id="Expiry_date" name="Expiry_date" disabled required>
                                        </div><!-- /form column -->
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto" onclick="enableFields()">Adicionar Entrada</button>
                                    <a href="{{route('allStock')}}" type="button" class="btn btn-light" data-dismiss="modal">Voltar</a>
                                </form><!-- /form -->
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- grid column -->
                <div class="col-lg-8">
                    <div class="col">

                        {{-- Inicio da tabela de todos eventos --}}
                        <header class="page-title-bar">
                            <!-- floating action -->
                                        
                            <button type="button" data-toggle="modal" data-target="#quantityModal" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                            
                            {{--Inicio do modal de acrescimo da quantidade do producto--}}
                            <div class="modal fade" id="quantityModal"
                                tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                aria-hidden="true">
                                <!-- .modal-dialog -->
                                <div class="modal-dialog" role="document">
                                    <!-- .modal-content -->
                                    <form action="{{ route('updateStock', ['id' => $stock->id]) }}"
                                        method="post">
                                        @csrf

                                        <div class="modal-content">
                                            <!-- .modal-header -->
                                            <div class="modal-header">
                                                <h6 id="clientNewModalLabel"
                                                    class="modal-title inline-editable">
                                                    <span class="sr-only">Formulario de Acrescimo de Productos</span>
                                                </h6>
                                            </div><!-- /.modal-header -->
                                            <!-- .modal-body -->
                                            <div class="modal-body">
                                                <!-- .form-row -->
                                                <div class="form-group">
                                                    <label>Nome de Producto</label>
                                                    <select class="form-control" name="Id_product" id="Id_product" onchange="prod(this);">
                                                        <option>===== Selecione ======</option>
                                                        @foreach ($products as $stock)
                                                            <option value="{{ $stock->id }}">{{ $stock->Product_name }}</option>
                                                        @endforeach
                                                    </select> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="cnContactName">Quantidade</label>
                                                    <input type="text" 
                                                        class="form-control"
                                                        name="Quantity" id="quantity"
                                                        placeholder="Digite a quantidade desejada">
                                                </div>
                                            <!-- /.form-row -->

                                            </div><!-- /.modal-body -->
                                            <!-- .modal-footer -->
                                            <div class="modal-footer">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary" onclick="enableField()">Fazer Acrescimo no
                                                    Producto</button>
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Fechar</button>
                                            </div><!-- /.modal-footer -->
                                        </div>
                                        </div><!-- /.modal-content -->
                                    </form>
                                </div><!-- /.modal-dialog -->
                            </div>
                            {{--Fim do modal de acrescimo--}}

                            <div class="d-md-flex align-items-md-start">
                                <h1 class="page-title mr-sm-auto"> Entrada de Productos </h1><!-- .btn-toolbar -->
                                <div class="btn-toolbar">
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
                                    <div class="input-group input-group-alt">
                                        <!-- .input-group-prepend -->
                                        <!-- .input-group -->
                                        <div class="input-group has-clearable">
                                          <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                          </div><input id="table-search" type="text" class="form-control" placeholder="Pesquisar productos">
                                        </div><!-- /.input-group -->
                                      </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
                                    <table class="table table-striped" style="min-width: 678px">
                                        <thead>
                                            <tr>
                                                <th> Nome do Producto </th>
                                                <th> Quantity </th>
                                                <th> Codigo </th>
                                                <th> Preco </th>
                                                <th> Data de Entrada </th>
                                                <th> Data de Validade </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stocks as $stock)
                                                <tr>
                                                    <td class="align-middle"> {{ $stock->product->Product_name }}</td>
                                                    <td class="align-middle"> {{ $stock->Quantity }} </td>
                                                    <td class="align-middle"> 
                                                        <span class="badge badge-subtle badge-success">{{$stock->Code}}</span>
                                                    </td>
                                                    <td class="align-middle"> {{ $stock->Price }} </td>
                                                    <td class="align-middle"> {{ $stock->Entry_date }} </td>
                                                    <td class="align-middle"> {{ $stock->Expiry_date }} </td>
                                                    <td class="align-middle text-right">
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                            data-toggle="modal" data-target="#clientNewModal{{ $stock->id }}"><i
                                                                class="fa fa-pencil-alt"></i> <span
                                                                class="sr-only">Edit</span></button> <button
                                                            type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="far fa-trash-alt" data-target="#deleteRecordModal{{ $stock->id }}" data-toggle="modal"></i> <span
                                                                class="sr-only">Remove</span></button>
                                                    </td>
                                                </tr>

                                                {{--Inicio do modal de eliminar--}}
                                                <div class="modal fade zoomIn" id="deleteRecordModal{{ $stock->id }}"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form action="{{route('deleteStock',['id'=>$stock->id])}}" method="get">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-body">
                                                                    <div class="mt-2 text-center">
                                                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                            trigger="loop"
                                                                            colors="primary:#f7b84b,secondary:#f06548"
                                                                            style="width:100px;height:100px">
                                                                        </lord-icon>
                                                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                            <h4>Voce tem certeza ?</h4>
                                                                            <p class="text-muted mx-4 mb-0">Voce pretende eliminar
                                                                             este producto ?</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                        <button type="button" class="btn w-sm btn-light"
                                                                            data-bs-dismiss="modal">Fechar</button>
                                                                        <button type="submit" name="submit"
                                                                            class="btn w-sm btn-danger " id="delete-record">Sim,
                                                                            elimine!</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--Fim do modal de eliminar--}}

                                                {{---Inicio do modal de editar--}}
                                                <div class="modal fade" id="clientNewModal{{ $stock->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                    aria-hidden="true">
                                                    <!-- .modal-dialog -->
                                                    <div class="modal-dialog" role="document">
                                                        <!-- .modal-content -->
                                                        <form action="{{ route('updateStock', ['id' => $stock->id]) }}"
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
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Nome de Producto</label>
                                                                                <select class="form-control" name="Id_product" id="Id_product" onchange="prod(this);">
                                                                                    <option value="{{$stock->Id_product}}">{{$stock->product->Product_name}}</option>
                                                                                    @foreach ($products as $stocks)
                                                                                        <option value="{{ $stocks->id }}">{{ $stocks->Product_name }}</option>
                                                                                    @endforeach
                                                                                </select> 
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="cnContactName">Quantidade</label>
                                                                                <input type="text" 
                                                                                    class="form-control"
                                                                                    name="Quantity" id="quantity"
                                                                                    placeholder="{{ $stock->Quantity }}" value="" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="cnContactName">Preco</label>
                                                                                <input type="text" id="price"
                                                                                    class="form-control"
                                                                                    name="Price" value=""
                                                                                    placeholder="{{ $stock->Price }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="cnContactEmail">Data do Entrada</label>
                                                                                <input type="date" id="entry_date"
                                                                                    class="form-control"
                                                                                    name="Entry_date" value=""
                                                                                    placeholder="{{ $stock->Entry_date }}" disabled>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="cnContactEmail">Data de Validade</label>
                                                                                <input type="date" id="expiry_date"
                                                                                    class="form-control"
                                                                                    name="Expiry_date" value=""
                                                                                    placeholder="{{ $stock->Expiry_date }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="cnContactEmail">Codigo</label>
                                                                                <input type="text" id="code"
                                                                                    class="form-control"
                                                                                    name="Code" value=""
                                                                                    placeholder="{{ $stock->Code }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $stock->id }}">
                                                                    </div><!-- /.form-row -->

                                                                </div><!-- /.modal-body -->
                                                                <!-- .modal-footer -->
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-primary" onclick="enableField()">Actualizar
                                                                        Producto</button>
                                                                    <button type="button" class="btn btn-light"
                                                                        data-dismiss="modal">Fechar</button>
                                                                </div><!-- /.modal-footer -->
                                                            </div><!-- /.modal-content -->
                                                        </form>
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                                {{-- Fim do formulario dos modais --}}

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        {{-- End of table section --}}

                    </div>
                </div>

                {{--Inicio da parte de adicao--}}
                
                {{---Fim do formulario de adicao--}}
            </div>
        </div>
    </main>

    @endrole

    @role('stock_manager')
{{-- Inicio da parte contendo o conteudo dos usuarios --}}
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page-section"></br>
            <!-- grid row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="col">
                        <!-- .card -->
                        <div class="card card-fluid">
                            <h6 class="card-header"> Adicionar Entrada </h6><!-- .card-body -->
                            <div class="card-body">
                                <!-- form -->
                                <form method="post" action="{{route('storeStock')}}">
                                    @csrf
                                    <!-- form row -->
                                    <div class="form-row">
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label>Nome de Producto</label>
                                            {{--Inicio do input de selecao de Productos--}}
                                            <select class="form-control" name="Id_product" id="Product_name" onchange="productos(this);">
                                                <option>--Selecione o Produto--</option>
                                                @foreach ($products as $stock)
                                                    <option value="{{ $stock->id }}">{{ $stock->Product_name }}</option>
                                                @endforeach
                                            </select> 
                                            {{--Fim do input de selecao--}}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="input02">Quantidade</label> 
                                            <input type="text" value="" class="form-control" id="Quantity" placeholder="Quantidade" name="Quantity" disabled>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input01">Codigo de Barra</label> 
                                            <input type="text" value="" class="form-control" id="Code" placeholder="Codigo de Barra" name="Code" disabled>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input02">Preco do Produto</label> 
                                            <input type="text" value="" class="form-control" id="Price" placeholder="Preco do Produto"  name="Price" disabled>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input01">Data de Entrada</label> 
                                            <input type="date" value="" class="form-control" id="Entry_date" name="Entry_date" disabled>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-12 mb-3">
                                            <label for="input01">Data de Validade</label> 
                                            <input type="date" value="" class="form-control" id="Expiry_date" name="Expiry_date" disabled>
                                        </div><!-- /form column -->
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto" onclick="enableFields()">Adicionar Entrada</button>
                                    <a href="{{route('allStock')}}" type="button" class="btn btn-light" data-dismiss="modal">Voltar</a>
                                </form><!-- /form -->
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- grid column -->
                <div class="col-lg-8">
                    <div class="col">

                        {{-- Inicio da tabela de todos eventos --}}
                        <header class="page-title-bar">
                            <!-- floating action -->
                            <!-- title and toolbar -->
                            <div class="d-md-flex align-items-md-start">
                                <h1 class="page-title mr-sm-auto"> Entrada de Productos </h1><!-- .btn-toolbar -->
                                <div class="btn-toolbar">
                                    <button type="button" class="btn btn-light"><i
                                            class="oi oi-data-transfer-download"></i> <span
                                            class="ml-1">Exportar</span></button> 
                                                                        
                                            <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                                            <!-- title and toolbar -->
                                            {{-- <button type="button"
                                        class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
                                            class="ml-1">Importar</span></button> --}}
                                    {{-- <div class="dropdown">
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
                                    <div class="input-group input-group-alt">
                                        <!-- .input-group-prepend -->
                                        <div class="input-group-prepend">
                                          <select id="filterBy" class="custom-select">
                                            <option value='' selected> Filtrar Por </option>
                                          </select>
                                        </div><!-- /.input-group-prepend -->
                                        <!-- .input-group -->
                                        <div class="input-group has-clearable">
                                          <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                          </div><input id="table-search" type="text" class="form-control" placeholder="Pesquisar productos">
                                        </div><!-- /.input-group -->
                                      </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
                                    <table class="table table-striped" style="min-width: 678px">
                                        <thead>
                                            <tr>
                                                <th> Nome do Producto </th>
                                                <th> Quantity </th>
                                                <th> Codigo </th>
                                                <th> Preco </th>
                                                <th> Data de Entrada </th>
                                                <th> Data de Validade </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stocks as $stock)
                                                <tr>
                                                    <td class="align-middle"> {{ $stock->product->Product_name }}</td>
                                                    <td class="align-middle"> {{ $stock->Quantity }} </td>
                                                    <td class="align-middle"> 
                                                        <span class="badge badge-subtle badge-success">{{$stock->Code}}</span>
                                                    </td>
                                                    <td class="align-middle"> {{ $stock->Price }} </td>
                                                    <td class="align-middle"> {{ $stock->Entry_date }} </td>
                                                    <td class="align-middle"> {{ $stock->Expiry_date }} </td>
                                                    <td class="align-middle text-right">
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                            data-toggle="modal" data-target="#clientNewModal{{ $stock->id }}"><i
                                                                class="fa fa-pencil-alt"></i> <span
                                                                class="sr-only">Edit</span></button> <button
                                                            type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="far fa-trash-alt" data-target="#deleteRecordModal{{ $stock->id }}" data-toggle="modal"></i> <span
                                                                class="sr-only">Remove</span></button>
                                                    </td>
                                                </tr>

                                                {{--Inicio do modal de eliminar--}}
                                                <div class="modal fade zoomIn" id="deleteRecordModal{{ $stock->id }}"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form action="{{route('deleteStock',['id'=>$stock->id])}}" method="get">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-body">
                                                                    <div class="mt-2 text-center">
                                                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                            trigger="loop"
                                                                            colors="primary:#f7b84b,secondary:#f06548"
                                                                            style="width:100px;height:100px">
                                                                        </lord-icon>
                                                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                            <h4>Voce tem certeza ?</h4>
                                                                            <p class="text-muted mx-4 mb-0">Voce pretende eliminar
                                                                             este producto ?</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                        <button type="button" class="btn w-sm btn-light"
                                                                            data-bs-dismiss="modal">Fechar</button>
                                                                        <button type="submit" name="submit"
                                                                            class="btn w-sm btn-danger " id="delete-record">Sim,
                                                                            elimine!</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--Fim do modal de eliminar--}}

                                                {{---Inicio do modal de editar--}}
                                                <div class="modal fade" id="clientNewModal{{ $stock->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                    aria-hidden="true">
                                                    <!-- .modal-dialog -->
                                                    <div class="modal-dialog" role="document">
                                                        <!-- .modal-content -->
                                                        <form action="{{ route('updateStock', ['id' => $stock->id]) }}"
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
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Nome de Producto</label>
                                                                                <select class="form-control" name="Id_product" id="Id_product" onchange="prod(this);">
                                                                                    <option value="{{$stock->Id_product}}">{{$stock->product->Product_name}}</option>
                                                                                    @foreach ($products as $stocks)
                                                                                        <option value="{{ $stocks->id }}">{{ $stocks->Product_name }}</option>
                                                                                    @endforeach
                                                                                </select> 
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="cnContactName">Quantidade</label>
                                                                                <input type="text" 
                                                                                    class="form-control"
                                                                                    name="Quantity" id="quantity"
                                                                                    placeholder="{{ $stock->Quantity }}" value="" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="cnContactName">Preco</label>
                                                                                <input type="text" id="price"
                                                                                    class="form-control"
                                                                                    name="Price" value=""
                                                                                    placeholder="{{ $stock->Price }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="cnContactEmail">Data do Entrada</label>
                                                                                <input type="date" id="entry_date"
                                                                                    class="form-control"
                                                                                    name="Entry_date" value=""
                                                                                    placeholder="{{ $stock->Entry_date }}" disabled>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="cnContactEmail">Data de Validade</label>
                                                                                <input type="date" id="expiry_date"
                                                                                    class="form-control"
                                                                                    name="Expiry_date" value=""
                                                                                    placeholder="{{ $stock->Expiry_date }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="cnContactEmail">Codigo</label>
                                                                                <input type="text" id="code"
                                                                                    class="form-control"
                                                                                    name="Code" value=""
                                                                                    placeholder="{{ $stock->Code }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $stock->id }}">
                                                                    </div><!-- /.form-row -->

                                                                </div><!-- /.modal-body -->
                                                                <!-- .modal-footer -->
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-primary" onclick="enableField()">Actualizar
                                                                        Producto</button>
                                                                    <button type="button" class="btn btn-light"
                                                                        data-dismiss="modal">Fechar</button>
                                                                </div><!-- /.modal-footer -->
                                                            </div><!-- /.modal-content -->
                                                        </form>
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                                {{-- Fim do formulario dos modais --}}

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.card-body -->
                        </div>
                        {{-- End of table section --}}

                    </div>
                </div>

                {{--Inicio da parte de adicao--}}
                
                {{---Fim do formulario de adicao--}}
            </div>
        </div>
    </main>

    @endrole

    @role('accountant')
{{-- Inicio da parte contendo o conteudo dos usuarios --}}
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page-section"></br>
            <!-- grid row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col">

                        {{-- Inicio da tabela de todos eventos --}}
                        <header class="page-title-bar">
                            <!-- floating action -->
                            <!-- title and toolbar -->
                            <div class="d-md-flex align-items-md-start">
                                <h1 class="page-title mr-sm-auto"> Entrada de Productos </h1><!-- .btn-toolbar -->
                                <div class="btn-toolbar">
                                    <button type="button" class="btn btn-light"><i
                                            class="oi oi-data-transfer-download"></i> <span
                                            class="ml-1">Exportar</span></button> 
                                            {{-- <button type="button"
                                        class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
                                            class="ml-1">Importar</span></button> --}}
                                    {{-- <div class="dropdown">
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
                                    <div class="input-group input-group-alt">
                                        <!-- .input-group-prepend -->
                                        <div class="input-group-prepend">
                                          <select id="filterBy" class="custom-select">
                                            <option value='' selected> Filtrar Por </option>
                                          </select>
                                        </div><!-- /.input-group-prepend -->
                                        <!-- .input-group -->
                                        <div class="input-group has-clearable">
                                          <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                          </div><input id="table-search" type="text" class="form-control" placeholder="Pesquisar productos">
                                        </div><!-- /.input-group -->
                                      </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
                                    <table class="table table-striped" style="min-width: 678px">
                                        <thead>
                                            <tr>
                                                <th> Nome do Producto </th>
                                                <th> Quantity </th>
                                                <th> Codigo </th>
                                                <th> Preco </th>
                                                <th> Data de Entrada </th>
                                                <th> Data de Validade </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stocks as $stock)
                                                <tr>
                                                    <td class="align-middle"> {{ $stock->product->Product_name }}</td>
                                                    <td class="align-middle"> {{ $stock->Quantity }} </td>
                                                    <td class="align-middle"> 
                                                        <span class="badge badge-subtle badge-success">{{$stock->Code}}</span>
                                                    </td>
                                                    <td class="align-middle"> {{ $stock->Price }} </td>
                                                    <td class="align-middle"> {{ $stock->Entry_date }} </td>
                                                    <td class="align-middle"> {{ $stock->Expiry_date }} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.card-body -->
                        </div>
                        {{-- End of table section --}}

                    </div>
                </div>

                {{--Inicio da parte de adicao--}}
                
                {{---Fim do formulario de adicao--}}
            </div>
        </div>
    </main>

    @endrole

@endsection
