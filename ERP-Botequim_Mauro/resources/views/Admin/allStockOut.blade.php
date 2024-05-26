@extends('Layout.top')
@section('content')

    @role('admin')
        {{-- Inicio da parte de administrador --}}
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
                                        <h1 class="page-title mr-sm-auto"> Stock de Saida </h1><!-- .btn-toolbar -->
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-light"><i
                                                    class="oi oi-data-transfer-download"></i> <span
                                                    class="ml-1">Exportar</span></button>
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
                                                        <th> Preco de Venda </th>
                                                        <th> Data de Saida </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td class="align-middle">
                                                                {{ $product->stocks->product->Product_name }} </td>
                                                            <td class="align-middle"> {{ $product->Quantity }} </td>
                                                            <td class="align-middle"> {{ $product->Product_price }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-warning">{{ $product->created_at }}</span>
                                                            </td>
                                                            <td class="align-middle text-right"> <button type="button"
                                                                    class="btn btn-sm btn-icon btn-secondary"><i
                                                                        class="far fa-trash-alt"
                                                                        data-target="#deleteRecordModal{{ $product->id }}"
                                                                        data-toggle="modal"></i> <span
                                                                        class="sr-only">Remove</span></button>
                                                            </td>
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
                    </div>
                </div>
        </main>
    @endrole

    @role('stock_manager')
        {{-- Inicio da parte de administrador --}}
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
                                    <div class="d-md-flex align-items-md-start">
                                        <h1 class="page-title mr-sm-auto"> Stock de Saida </h1><!-- .btn-toolbar -->
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-light"><i
                                                    class="oi oi-data-transfer-download"></i> <span
                                                    class="ml-1">Exportar</span></button>
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
                                                        <th> Preco de Venda </th>
                                                        <th> Data de Saida </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td class="align-middle">
                                                                {{ $product->stocks->product->Product_name }} </td>
                                                            <td class="align-middle"> {{ $product->Quantity }} </td>
                                                            <td class="align-middle"> {{ $product->Product_price }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-warning">{{ $product->created_at }}</span>
                                                            </td>
                                                            <td class="align-middle text-right"> <button type="button"
                                                                    class="btn btn-sm btn-icon btn-secondary"><i
                                                                        class="far fa-trash-alt"
                                                                        data-target="#deleteRecordModal{{ $product->id }}"
                                                                        data-toggle="modal"></i> <span
                                                                        class="sr-only">Remove</span></button>
                                                            </td>
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
                    </div>
                </div>
        </main>
    @endrole

    @role('accountant')
        {{-- Inicio da parte de administrador --}}
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
                                        <h1 class="page-title mr-sm-auto"> Stock de Saida </h1><!-- .btn-toolbar -->
                                        <div class="btn-toolbar">
                                            <button type="button" class="btn btn-light"><i
                                                    class="oi oi-data-transfer-download"></i> <span
                                                    class="ml-1">Exportar</span></button>
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
                                                        <th> Preco de Venda </th>
                                                        <th> Data de Saida </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td class="align-middle">
                                                                {{ $product->stocks->product->Product_name }} </td>
                                                            <td class="align-middle"> {{ $product->Quantity }} </td>
                                                            <td class="align-middle"> {{ $product->Product_price }} </td>
                                                            <td class="align-middle">
                                                                <span
                                                                    class="badge badge-subtle badge-warning">{{ $product->created_at }}</span>
                                                            </td>
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
                    </div>
                </div>
        </main>
    @endrole

@endsection
