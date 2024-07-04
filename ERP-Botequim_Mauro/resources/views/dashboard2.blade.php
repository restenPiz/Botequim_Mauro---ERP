@extends('Layout.TopBar')
@section('content')
    {{-- Inicio do conteudo da parte do gestor de stock --}}

    {{-- Inicio das cards --}}
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <div class="page-inner">
                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <p class="lead">
                                <span class="font-weight-bold">Bem Vindo, {{ Auth::user()->name }}.</span> <span
                                    class="d-block text-muted">Desfrute desse magnifico sistema!</span>
                            </p>
                            <div class="metric-row">
                                <!-- metric column -->
                                {{-- <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-people"></i></sub> <span class="value">12</span>
                                            </p>
                                            <h2 class="metric-label"> Teams </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column --> --}}
                                <!-- metric column -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-fork"></i></sub> <span class="value">{{$stock_in}}</span>
                                            </p>
                                            <h2 class="metric-label"> Productos no Stock </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column -->
                                <!-- metric column -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-tasks"></i></sub> <span class="value">{{$prod}}</span>
                                            </p>
                                            <h2 class="metric-label"> Todos Productos </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column -->
                                <!-- metric column -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <!-- .metric -->
                                    <div class="card-metric">
                                        <div class="metric">
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-timer"></i></sub> <span class="value">{{$stock_out}}</span>
                                            </p>
                                            <h2 class="metric-label"> Productos Vendidos </h2>
                                        </div>
                                    </div><!-- /.metric -->
                                </div><!-- /metric column -->
                            </div>
                            {{--Fim das cards--}}

                            {{--Inicio da tabela de todos productos--}}
                            <div class="card mt-4" style="margin-top:-4rem">
                                <!-- .card-body -->
                                <div class="card-body">
                                    {{-- <h2 class="card-title"> Contacts </h2><!-- .table-responsive --> --}}
                                    <div class="table-responsive">

                                        {{-- <div class="form-group">
                                            <!-- .input-group -->
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
                                          </div><!-- /.form-group --> --}}

                                        <table id="stock-table" class="table table-striped" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Nome do Producto </th>
                                                    <th> Quantidade </th>
                                                    <th> Codigo </th>
                                                    <th> Preco </th>
                                                    <th> Preco de Venda </th>
                                                    <th> Data de Entrada </th>
                                                    <th> Data de Validade </th>
                                                    <th> Categoria </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td class="align-middle"> {{ $product->Product_name }} </td>
                                                        <td class="align-middle"> {{ $product->Quantity }} </td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-success">{{$product->Code}}</span>
                                                        </td>
                                                        <td class="align-middle"> {{ $product->Price }} </td>
                                                        <td class="align-middle"> {{ $product->Sale_price }} </td>
                                                        <td class="align-middle"> {{ $product->Entry_date }} </td>
                                                        <td class="align-middle"> {{ $product->Expiry_date }} </td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-warning">{{ $product->categoria->Category_name }}</span>
                                                        </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal"
                                                                data-target="#clientNewModal{{ $product->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt" data-target="#deleteRecordModal{{ $product->id }}" data-toggle="modal"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar--}}
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $product->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{route('deleteProduct',['id'=>$product->id])}}" method="get">
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

                                                    {{--Inicio do modal de edicao--}}
                                                    <div class="modal fade" id="clientNewModal{{ $product->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updateProduct', ['id' => $product->id]) }}"
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
                                                                                    <label for="cnContactName">Nome do Producto</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Product_name"
                                                                                        value="{{ $product->Product_name }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cnContactName">Quantidade</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Quantity"
                                                                                        value="{{ $product->Quantity }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cnContactName">Preco</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Price"
                                                                                        value="{{ $product->Price }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cnContactName">Preco de Venda</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Sale_price"
                                                                                        value="{{ $product->Sale_price }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cnContactEmail">Data do Entrada</label>
                                                                                    <input type="date" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Entry_date"
                                                                                        value="{{ $product->Entry_date }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cnContactEmail">Data de Validade</label>
                                                                                    <input type="date" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Expiry_date"
                                                                                        value="{{ $product->Expiry_date }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Categorias</label>
                                                                                    <select class="form-control" name="Id_category">
                                                                                        @foreach ($categories as $category)
                                                                                        <option value="{{$category->id}}">{{$category->Category_name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cnContactEmail">Codigo</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Code"
                                                                                        value="{{ $product->Code }}">
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $product->id }}">
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Actualizar
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
                                <!-- .card-footer -->
                                <div class="card-footer">
                                    <a href="{{route('addProduct')}}" class="card-footer-item"><i
                                            class="fa fa-plus-circle mr-1"></i> Adicionar Producto</a>
                                </div><!-- /.card-footer -->
                            </div>
                            {{--Fim da tabela de todos productos--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Fim do conteudo da parte de gestor de stock --}}
@endsection
