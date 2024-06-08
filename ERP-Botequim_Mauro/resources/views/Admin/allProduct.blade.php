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
                        <!-- grid column -->
                        <div class="col-lg-12">
                            <div class="col">

                                {{-- Inicio da tabela de todos eventos --}}
                                <header class="page-title-bar">
                                    <!-- title and toolbar -->
                                    <div class="d-md-flex align-items-md-start">
                                        <h1 class="page-title mr-sm-auto"> Todos os Productos </h1><!-- .btn-toolbar -->
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-light"><i
                                                    class="oi oi-data-transfer-download"></i> <span
                                                    class="ml-1">Exportar</span></button>
                                        </div><!-- /.btn-toolbar -->
                                    </div><!-- /title and toolbar -->
                                </header><!-- /.page-title-bar -->
                                <!-- .page-section -->

                                <div class="card">
                                    
                                    <form method="post" action="{{ route('addProductQuantity') }}">
                                        @csrf
                                    <div class="card-body">
                                        {{-- Inicio do formulario de adicao da quantidade de um producto --}}
                                        <div class="row">
                                            <div class="col">
                                                    <!-- form row -->
                                                    <div class="form-row">
                                                        <!-- form column -->
                                                        <div class="col-md-12 mb-3">
                                                            <label>Nome de Producto</label>
                                                            {{-- Inicio do input de selecao de Productos --}}
                                                            <select
                                                                class="form-control @error('Id_product') is-invalid @enderror"
                                                                name="Id_product" id="Id_product" required >
                                                                <option>--Selecione o Produto--</option>
                                                                @foreach ($products as $stock)
                                                                    <option value="{{ $stock->id }}">
                                                                        {{ $stock->Product_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('Id_product')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            {{-- Fim do input de selecao --}}
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col">
                                                    <!-- form row -->
                                                    <div class="form-row">
                                                        <!-- form column -->
                                                        <div class="col-md-12 mb-3">
                                                            <label for="input02">Quantidade</label>
                                                            <input type="text" class="form-control"
                                                                id="Quantity" placeholder="Digite a Quantidade do Producto" name="Quantity"
                                                                required>
                                                        </div><!-- /form column -->
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-success text-nowrap ml-auto"
                                        >Adicionar Producto Existente</button>
                                        {{-- Fim do formulario de adicao da quantidade de um producto --}}
                                    </div>
                                </form>
                                </div>
                                {{-- Table section --}}
                                <div class="card mt-4" style="margin-top:-4rem">
                                    <!-- .card-body -->
                                    <div class="card-body">
                                        {{-- <h2 class="card-title"> Contacts </h2><!-- .table-responsive --> --}}
                                        <div class="table-responsive">

                                            <div class="form-group">
                                                <div class="input-group input-group-alt">
                                                    <div class="input-group has-clearable">
                                                        <button id="clear-search" type="button" class="close"
                                                            aria-label="Close"><span aria-hidden="true"><i
                                                                    class="fa fa-times-circle"></i></span></button>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><span
                                                                    class="oi oi-magnifying-glass"></span></span>
                                                        </div>
                                                        <input id="table-search" type="text" class="form-control"
                                                            placeholder="Pesquisar productos">
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table table-striped" style="min-width: 678px">
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
                                                <tbody id="product-list">
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td class="align-middle"> {{ $product->Product_name }} </td>
                                                            <td class="align-middle"> {{ $product->Quantity }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-success">{{ $product->Code }}</span>
                                                            </td>
                                                            <td class="align-middle"> {{ $product->Price }} </td>
                                                            <td class="align-middle"> {{ $product->Sale_price }} </td>
                                                            <td class="align-middle"> {{ $product->Entry_date }} </td>
                                                            <td class="align-middle"> {{ $product->Expiry_date }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-warning">{{ $product->categoria->Category_name }}</span>
                                                            </td>
                                                            <td class="align-middle text-right">
                                                                <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                    data-toggle="modal"
                                                                    data-target="#clientNewModal{{ $product->id }}"><i
                                                                        class="fa fa-pencil-alt"></i> <span
                                                                        class="sr-only">Edit</span></button> <button
                                                                    type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                        class="far fa-trash-alt"
                                                                        data-target="#deleteRecordModal{{ $product->id }}"
                                                                        data-toggle="modal"></i> <span
                                                                        class="sr-only">Remove</span></button>
                                                            </td>
                                                        </tr>

                                                        {{-- Inicio do modal de eliminar --}}
                                                        <div class="modal fade zoomIn"
                                                            id="deleteRecordModal{{ $product->id }}" tabindex="-1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('deleteProduct', ['id' => $product->id]) }}"
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
                                                                                    <p class="text-muted mx-4 mb-0">Voce
                                                                                        pretende eliminar
                                                                                        este producto ?</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                <button type="button"
                                                                                    class="btn w-sm btn-light"
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

                                                        {{-- Inicio do modal de edicao --}}
                                                        <div class="modal fade" id="clientNewModal{{ $product->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="clientNewModalLabel" aria-hidden="true">
                                                            <!-- .modal-dialog -->
                                                            <div class="modal-dialog" role="document">
                                                                <!-- .modal-content -->
                                                                <form
                                                                    action="{{ route('updateProduct', ['id' => $product->id]) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    <div class="modal-content">
                                                                        <!-- .modal-header -->
                                                                        <div class="modal-header">
                                                                            <h6 id="clientNewModalLabel"
                                                                                class="modal-title inline-editable">
                                                                                <span class="sr-only">Formulario de
                                                                                    Actualizacao
                                                                                    de Productos</span>
                                                                            </h6>
                                                                        </div><!-- /.modal-header -->
                                                                        <!-- .modal-body -->
                                                                        <div class="modal-body">
                                                                            <!-- .form-row -->
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactName">Nome do
                                                                                            Producto</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Product_name"
                                                                                            value="{{ $product->Product_name }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactName">Quantidade</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Quantity"
                                                                                            value="{{ $product->Quantity }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactName">Preco</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Price"
                                                                                            value="{{ $product->Price }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactName">Preco de
                                                                                            Venda</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Sale_price"
                                                                                            value="{{ $product->Sale_price }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactEmail">Data do
                                                                                            Entrada</label>
                                                                                        <input type="date"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Entry_date"
                                                                                            value="{{ $product->Entry_date }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactEmail">Data de
                                                                                            Validade</label>
                                                                                        <input type="date"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Expiry_date"
                                                                                            value="{{ $product->Expiry_date }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Categorias</label>
                                                                                        <select class="form-control"
                                                                                            name="Id_category">
                                                                                            @foreach ($categories as $category)
                                                                                                <option
                                                                                                    value="{{ $category->id }}">
                                                                                                    {{ $category->Category_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactEmail">Codigo</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
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
                                        <div class="d-flex justify-content-center">
                                            {{ $products->links('vendor.pagination.simple-bootstrap-4') }}
                                        </div>
                                    </div><!-- /.card-body -->
                                    <!-- .card-footer -->
                                    <div class="card-footer">
                                        <a href="{{ route('addProduct') }}" class="card-footer-item"><i
                                                class="fa fa-plus-circle mr-1"></i> Adicionar Producto</a>
                                    </div><!-- /.card-footer -->
                                </div>
                                {{-- End of table section --}}

                            </div>
                        </div>
                    </div>
                </div>
        </main>

        <script>
            $(document).ready(function() {
                $('#table-search').on('input', function() {
                    var query = $(this).val();
                    if (query.length > 0) {
                        $.ajax({
                            url: "{{ route('search.products') }}",
                            type: "GET",
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#product-list').empty();
                                if (data.length > 0) {
                                    $.each(data, function(key, product) {
                                        var row = '<tr>' +
                                            '<td class="align-middle">' + product
                                            .Product_name + '</td>' +
                                            '<td class="align-middle">' + product.Quantity +
                                            '</td>' +
                                            '<td class="align-middle"><span class="badge badge-subtle badge-success">' +
                                            product.Code + '</span></td>' +
                                            '<td class="align-middle">' + product.Price +
                                            '</td>' +
                                            '<td class="align-middle">' + product
                                            .Sale_price + '</td>' +
                                            '<td class="align-middle">' + product
                                            .Entry_date + '</td>' +
                                            '<td class="align-middle">' + product
                                            .Expiry_date + '</td>' +
                                            '<td class="align-middle"><span class="badge badge-subtle badge-warning">' +
                                            product.categoria.Category_name +
                                            '</span></td>' +
                                            '<td class="align-middle text-right">' +
                                            '<button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal' +
                                            product.id +
                                            '"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> ' +
                                            '<button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt" data-target="#deleteRecordModal' +
                                            product.id +
                                            '" data-toggle="modal"></i> <span class="sr-only">Remove</span></button>' +
                                            '</td>' +
                                            '</tr>';
                                        $('#product-list').append(row);
                                    });
                                } else {
                                    $('#product-list').append(
                                        '<tr><td colspan="9" class="text-center">Nenhum produto encontrado</td></tr>'
                                        );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Erro na requisição AJAX: ", status, error);
                            }
                        });
                    } else {
                        $('#product-list').empty();
                        @foreach ($products as $product)
                            var row = '<tr>' +
                                '<td class="align-middle"> {{ $product->Product_name }} </td>' +
                                '<td class="align-middle"> {{ $product->Quantity }} </td>' +
                                '<td class="align-middle"><span class="badge badge-subtle badge-success"> {{ $product->Code }} </span></td>' +
                                '<td class="align-middle"> {{ $product->Price }} </td>' +
                                '<td class="align-middle"> {{ $product->Sale_price }} </td>' +
                                '<td class="align-middle"> {{ $product->Entry_date }} </td>' +
                                '<td class="align-middle"> {{ $product->Expiry_date }} </td>' +
                                '<td class="align-middle"><span class="badge badge-subtle badge-warning"> {{ $product->categoria->Category_name }} </span></td>' +
                                '<td class="align-middle text-right">' +
                                '<button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal{{ $product->id }}"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> ' +
                                '<button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt" data-target="#deleteRecordModal{{ $product->id }}" data-toggle="modal"></i> <span class="sr-only">Remove</span></button>' +
                                '</td>' +
                                '</tr>';
                            $('#product-list').append(row);
                        @endforeach
                    }
                });
            });
        </script>
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
                        <!-- grid column -->
                        <div class="col-lg-12">
                            <div class="col">

                                {{-- Inicio da tabela de todos eventos --}}
                                <header class="page-title-bar"><!-- /.breadcrumb -->
                                    <!-- floating action -->
                                    <button type="button" class="btn btn-success btn-floated"><span
                                            class="fa fa-plus"></span></button> <!-- /floating action -->
                                    <!-- title and toolbar -->
                                    <div class="d-md-flex align-items-md-start">
                                        <h1 class="page-title mr-sm-auto"> Todos os Productos </h1><!-- .btn-toolbar -->
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-light"><i
                                                    class="oi oi-data-transfer-download"></i> <span
                                                    class="ml-1">Exportar</span></button>
                                            {{-- <button type="button" --}}
                                            {{-- class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
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

                                            <div class="form-group">
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
                                                        <button id="clear-search" type="button" class="close"
                                                            aria-label="Close"><span aria-hidden="true"><i
                                                                    class="fa fa-times-circle"></i></span></button>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><span
                                                                    class="oi oi-magnifying-glass"></span></span>
                                                        </div><input id="table-search" type="text" class="form-control"
                                                            placeholder="Pesquisar productos">
                                                    </div><!-- /.input-group -->
                                                </div><!-- /.input-group -->
                                            </div><!-- /.form-group -->

                                            <table class="table table-striped" style="min-width: 678px">
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
                                                                <span
                                                                    class="badge badge-subtle badge-success">{{ $product->Code }}</span>
                                                            </td>
                                                            <td class="align-middle"> {{ $product->Price }} </td>
                                                            <td class="align-middle"> {{ $product->Sale_price }} </td>
                                                            <td class="align-middle"> {{ $product->Entry_date }} </td>
                                                            <td class="align-middle"> {{ $product->Expiry_date }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-warning">{{ $product->categoria->Category_name }}</span>
                                                            </td>
                                                            <td class="align-middle text-right">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon btn-secondary"
                                                                    data-toggle="modal"
                                                                    data-target="#clientNewModal{{ $product->id }}"><i
                                                                        class="fa fa-pencil-alt"></i> <span
                                                                        class="sr-only">Edit</span></button> <button
                                                                    type="button"
                                                                    class="btn btn-sm btn-icon btn-secondary"><i
                                                                        class="far fa-trash-alt"
                                                                        data-target="#deleteRecordModal{{ $product->id }}"
                                                                        data-toggle="modal"></i> <span
                                                                        class="sr-only">Remove</span></button>
                                                            </td>
                                                        </tr>

                                                        {{-- Inicio do modal de eliminar --}}
                                                        <div class="modal fade zoomIn"
                                                            id="deleteRecordModal{{ $product->id }}" tabindex="-1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('deleteProduct', ['id' => $product->id]) }}"
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
                                                                                    <p class="text-muted mx-4 mb-0">Voce
                                                                                        pretende eliminar
                                                                                        este producto ?</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                <button type="button"
                                                                                    class="btn w-sm btn-light"
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

                                                        {{-- Inicio do modal de edicao --}}
                                                        <div class="modal fade" id="clientNewModal{{ $product->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="clientNewModalLabel" aria-hidden="true">
                                                            <!-- .modal-dialog -->
                                                            <div class="modal-dialog" role="document">
                                                                <!-- .modal-content -->
                                                                <form
                                                                    action="{{ route('updateProduct', ['id' => $product->id]) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    <div class="modal-content">
                                                                        <!-- .modal-header -->
                                                                        <div class="modal-header">
                                                                            <h6 id="clientNewModalLabel"
                                                                                class="modal-title inline-editable">
                                                                                <span class="sr-only">Formulario de
                                                                                    Actualizacao
                                                                                    de Productos</span>
                                                                            </h6>
                                                                        </div><!-- /.modal-header -->
                                                                        <!-- .modal-body -->
                                                                        <div class="modal-body">
                                                                            <!-- .form-row -->
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactName">Nome do
                                                                                            Producto</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Product_name"
                                                                                            value="{{ $product->Product_name }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactName">Quantidade</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Quantity"
                                                                                            value="{{ $product->Quantity }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactName">Preco</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Price"
                                                                                            value="{{ $product->Price }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactName">Preco de
                                                                                            Venda</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Sale_price"
                                                                                            value="{{ $product->Sale_price }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactEmail">Data do
                                                                                            Entrada</label>
                                                                                        <input type="date"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Entry_date"
                                                                                            value="{{ $product->Entry_date }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactEmail">Data de
                                                                                            Validade</label>
                                                                                        <input type="date"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Expiry_date"
                                                                                            value="{{ $product->Expiry_date }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Categorias</label>
                                                                                        <select class="form-control"
                                                                                            name="Id_category">
                                                                                            @foreach ($categories as $category)
                                                                                                <option
                                                                                                    value="{{ $category->id }}">
                                                                                                    {{ $category->Category_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactEmail">Codigo</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
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
                                        <div class="d-flex justify-content-center">
                                            {{ $products->links('vendor.pagination.simple-bootstrap-4') }}
                                        </div>
                                    </div><!-- /.card-body -->
                                    <!-- .card-footer -->
                                    <div class="card-footer">
                                        <a href="{{ route('addProduct') }}" class="card-footer-item"><i
                                                class="fa fa-plus-circle mr-1"></i> Adicionar Producto</a>
                                    </div><!-- /.card-footer -->
                                </div>
                                {{-- End of table section --}}

                            </div>
                        </div>
                    </div>
                </div>
        </main>


        <script>
            $(document).ready(function() {
                $('#table-search').on('input', function() {
                    var query = $(this).val();
                    if (query.length > 0) {
                        $.ajax({
                            url: "{{ route('search.products') }}",
                            type: "GET",
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#product-list').empty();
                                if (data.length > 0) {
                                    $.each(data, function(key, product) {
                                        var row = '<tr>' +
                                            '<td class="align-middle">' + product
                                            .Product_name + '</td>' +
                                            '<td class="align-middle">' + product.Quantity +
                                            '</td>' +
                                            '<td class="align-middle"><span class="badge badge-subtle badge-success">' +
                                            product.Code + '</span></td>' +
                                            '<td class="align-middle">' + product.Price +
                                            '</td>' +
                                            '<td class="align-middle">' + product
                                            .Sale_price + '</td>' +
                                            '<td class="align-middle">' + product
                                            .Entry_date + '</td>' +
                                            '<td class="align-middle">' + product
                                            .Expiry_date + '</td>' +
                                            '<td class="align-middle"><span class="badge badge-subtle badge-warning">' +
                                            product.categoria.Category_name +
                                            '</span></td>' +
                                            '<td class="align-middle text-right">' +
                                            '<button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal' +
                                            product.id +
                                            '"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> ' +
                                            '<button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt" data-target="#deleteRecordModal' +
                                            product.id +
                                            '" data-toggle="modal"></i> <span class="sr-only">Remove</span></button>' +
                                            '</td>' +
                                            '</tr>';
                                        $('#product-list').append(row);
                                    });
                                } else {
                                    $('#product-list').append(
                                        '<tr><td colspan="9" class="text-center">Nenhum produto encontrado</td></tr>'
                                        );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Erro na requisição AJAX: ", status, error);
                            }
                        });
                    } else {
                        $('#product-list').empty();
                        @foreach ($products as $product)
                            var row = '<tr>' +
                                '<td class="align-middle"> {{ $product->Product_name }} </td>' +
                                '<td class="align-middle"> {{ $product->Quantity }} </td>' +
                                '<td class="align-middle"><span class="badge badge-subtle badge-success"> {{ $product->Code }} </span></td>' +
                                '<td class="align-middle"> {{ $product->Price }} </td>' +
                                '<td class="align-middle"> {{ $product->Sale_price }} </td>' +
                                '<td class="align-middle"> {{ $product->Entry_date }} </td>' +
                                '<td class="align-middle"> {{ $product->Expiry_date }} </td>' +
                                '<td class="align-middle"><span class="badge badge-subtle badge-warning"> {{ $product->categoria->Category_name }} </span></td>' +
                                '<td class="align-middle text-right">' +
                                '<button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal{{ $product->id }}"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> ' +
                                '<button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt" data-target="#deleteRecordModal{{ $product->id }}" data-toggle="modal"></i> <span class="sr-only">Remove</span></button>' +
                                '</td>' +
                                '</tr>';
                            $('#product-list').append(row);
                        @endforeach
                    }
                });
            });
        </script>
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
                        <!-- grid column -->
                        <div class="col-lg-12">
                            <div class="col">

                                {{-- Inicio da tabela de todos eventos --}}
                                <header class="page-title-bar"><!-- /.breadcrumb -->
                                    <!-- floating action -->
                                    <!-- title and toolbar -->
                                    <div class="d-md-flex align-items-md-start">
                                        <h1 class="page-title mr-sm-auto"> Todos os Productos </h1><!-- .btn-toolbar -->
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-light"><i
                                                    class="oi oi-data-transfer-download"></i> <span
                                                    class="ml-1">Exportar</span></button>
                                            {{-- <button type="button" --}}
                                            {{-- class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
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

                                            <div class="form-group">
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
                                                        <button id="clear-search" type="button" class="close"
                                                            aria-label="Close"><span aria-hidden="true"><i
                                                                    class="fa fa-times-circle"></i></span></button>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><span
                                                                    class="oi oi-magnifying-glass"></span></span>
                                                        </div><input id="table-search" type="text" class="form-control"
                                                            placeholder="Pesquisar productos">
                                                    </div><!-- /.input-group -->
                                                </div><!-- /.input-group -->
                                            </div><!-- /.form-group -->

                                            <table class="table table-striped" style="min-width: 678px">
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
                                                                <span
                                                                    class="badge badge-subtle badge-success">{{ $product->Code }}</span>
                                                            </td>
                                                            <td class="align-middle"> {{ $product->Price }} </td>
                                                            <td class="align-middle"> {{ $product->Sale_price }} </td>
                                                            <td class="align-middle"> {{ $product->Entry_date }} </td>
                                                            <td class="align-middle"> {{ $product->Expiry_date }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-warning">{{ $product->categoria->Category_name }}</span>
                                                            </td>
                                                            <td class="align-middle text-right">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon btn-secondary"
                                                                    data-toggle="modal"
                                                                    data-target="#clientNewModal{{ $product->id }}"><i
                                                                        class="fa fa-pencil-alt"></i> <span
                                                                        class="sr-only">Edit</span></button> <button
                                                                    type="button"
                                                                    class="btn btn-sm btn-icon btn-secondary"><i
                                                                        class="far fa-trash-alt"
                                                                        data-target="#deleteRecordModal{{ $product->id }}"
                                                                        data-toggle="modal"></i> <span
                                                                        class="sr-only">Remove</span></button>
                                                            </td>
                                                        </tr>

                                                        {{-- Inicio do modal de eliminar --}}
                                                        <div class="modal fade zoomIn"
                                                            id="deleteRecordModal{{ $product->id }}" tabindex="-1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('deleteProduct', ['id' => $product->id]) }}"
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
                                                                                    <p class="text-muted mx-4 mb-0">Voce
                                                                                        pretende eliminar
                                                                                        este producto ?</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                <button type="button"
                                                                                    class="btn w-sm btn-light"
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

                                                        {{-- Inicio do modal de edicao --}}
                                                        <div class="modal fade" id="clientNewModal{{ $product->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="clientNewModalLabel" aria-hidden="true">
                                                            <!-- .modal-dialog -->
                                                            <div class="modal-dialog" role="document">
                                                                <!-- .modal-content -->
                                                                <form
                                                                    action="{{ route('updateProduct', ['id' => $product->id]) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    <div class="modal-content">
                                                                        <!-- .modal-header -->
                                                                        <div class="modal-header">
                                                                            <h6 id="clientNewModalLabel"
                                                                                class="modal-title inline-editable">
                                                                                <span class="sr-only">Formulario de
                                                                                    Actualizacao
                                                                                    de Productos</span>
                                                                            </h6>
                                                                        </div><!-- /.modal-header -->
                                                                        <!-- .modal-body -->
                                                                        <div class="modal-body">
                                                                            <!-- .form-row -->
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactName">Nome do
                                                                                            Producto</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Product_name"
                                                                                            value="{{ $product->Product_name }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactName">Quantidade</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Quantity"
                                                                                            value="{{ $product->Quantity }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactName">Preco</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Price"
                                                                                            value="{{ $product->Price }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactName">Preco de
                                                                                            Venda</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Sale_price"
                                                                                            value="{{ $product->Sale_price }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactEmail">Data do
                                                                                            Entrada</label>
                                                                                        <input type="date"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Entry_date"
                                                                                            value="{{ $product->Entry_date }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cnContactEmail">Data de
                                                                                            Validade</label>
                                                                                        <input type="date"
                                                                                            id="cnContactName"
                                                                                            class="form-control"
                                                                                            name="Expiry_date"
                                                                                            value="{{ $product->Expiry_date }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Categorias</label>
                                                                                        <select class="form-control"
                                                                                            name="Id_category">
                                                                                            @foreach ($categories as $category)
                                                                                                <option
                                                                                                    value="{{ $category->id }}">
                                                                                                    {{ $category->Category_name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="cnContactEmail">Codigo</label>
                                                                                        <input type="text"
                                                                                            id="cnContactName"
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
                                        <div class="d-flex justify-content-center">
                                            {{ $products->links('vendor.pagination.simple-bootstrap-4') }}
                                        </div>
                                    </div><!-- /.card-body -->
                                    <!-- .card-footer -->
                                    {{-- <div class="card-footer">
                                <a href="{{route('addProduct')}}" class="card-footer-item"><i
                                        class="fa fa-plus-circle mr-1"></i> Adicionar Producto</a>
                            </div><!-- /.card-footer --> --}}
                                </div>
                                {{-- End of table section --}}

                            </div>
                        </div>
                    </div>
                </div>
        </main>


        <script>
            $(document).ready(function() {
                $('#table-search').on('input', function() {
                    var query = $(this).val();
                    if (query.length > 0) {
                        $.ajax({
                            url: "{{ route('search.products') }}",
                            type: "GET",
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#product-list').empty();
                                if (data.length > 0) {
                                    $.each(data, function(key, product) {
                                        var row = '<tr>' +
                                            '<td class="align-middle">' + product
                                            .Product_name + '</td>' +
                                            '<td class="align-middle">' + product.Quantity +
                                            '</td>' +
                                            '<td class="align-middle"><span class="badge badge-subtle badge-success">' +
                                            product.Code + '</span></td>' +
                                            '<td class="align-middle">' + product.Price +
                                            '</td>' +
                                            '<td class="align-middle">' + product
                                            .Sale_price + '</td>' +
                                            '<td class="align-middle">' + product
                                            .Entry_date + '</td>' +
                                            '<td class="align-middle">' + product
                                            .Expiry_date + '</td>' +
                                            '<td class="align-middle"><span class="badge badge-subtle badge-warning">' +
                                            product.categoria.Category_name +
                                            '</span></td>' +
                                            '<td class="align-middle text-right">' +
                                            '<button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal' +
                                            product.id +
                                            '"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> ' +
                                            '<button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt" data-target="#deleteRecordModal' +
                                            product.id +
                                            '" data-toggle="modal"></i> <span class="sr-only">Remove</span></button>' +
                                            '</td>' +
                                            '</tr>';
                                        $('#product-list').append(row);
                                    });
                                } else {
                                    $('#product-list').append(
                                        '<tr><td colspan="9" class="text-center">Nenhum produto encontrado</td></tr>'
                                        );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Erro na requisição AJAX: ", status, error);
                            }
                        });
                    } else {
                        $('#product-list').empty();
                        @foreach ($products as $product)
                            var row = '<tr>' +
                                '<td class="align-middle"> {{ $product->Product_name }} </td>' +
                                '<td class="align-middle"> {{ $product->Quantity }} </td>' +
                                '<td class="align-middle"><span class="badge badge-subtle badge-success"> {{ $product->Code }} </span></td>' +
                                '<td class="align-middle"> {{ $product->Price }} </td>' +
                                '<td class="align-middle"> {{ $product->Sale_price }} </td>' +
                                '<td class="align-middle"> {{ $product->Entry_date }} </td>' +
                                '<td class="align-middle"> {{ $product->Expiry_date }} </td>' +
                                '<td class="align-middle"><span class="badge badge-subtle badge-warning"> {{ $product->categoria->Category_name }} </span></td>' +
                                '<td class="align-middle text-right">' +
                                '<button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientNewModal{{ $product->id }}"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> ' +
                                '<button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt" data-target="#deleteRecordModal{{ $product->id }}" data-toggle="modal"></i> <span class="sr-only">Remove</span></button>' +
                                '</td>' +
                                '</tr>';
                            $('#product-list').append(row);
                        @endforeach
                    }
                });
            });
        </script>
    @endrole

@endsection
