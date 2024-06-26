@extends('Layout.top')
@section('content')

    {{--Inicio da parte de todas vendas--}}

    @role('attendant')

    {{--Inicio da parte do atendente--}}
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
                                    <h1 class="page-title mr-sm-auto"> Todas Vendas </h1><!-- .btn-toolbar -->
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
                                                    <th> Quantidade </th>
                                                    <th> Metodo de Pagamento </th>
                                                    <th> Preco de Venda </th>
                                                    <th> Valor Total </th>
                                                    <th> Valor Pago </th>
                                                    <th> Troco </th>
                                                    <th> Data de Venda </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td class="align-middle"> {{ $product->stocks->product->Product_name }} </td>
                                                        <td class="align-middle"> {{ $product->Quantity }} </td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-success">{{$product->payments->Name_payment}}</span>
                                                        </td>
                                                        <td class="align-middle"> {{ number_format($product->Product_price,2,',','.',).' MZN' }}</td>
                                                        <td class="align-middle"> {{ number_format($product->Amount,2,',','.',).' MZN' }}</td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-primary">{{ number_format($product->Total_price,2,',','.',).' MZN' }}
                                                            </span></td>
                                                        <td class="align-middle"> {{
                                                            number_format($troco=$product->Total_price - $product->Amount,2,',','.',).' MZN'
                                                        }}</td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-warning">{{ \Carbon\Carbon::parse($product->created_at)->format('Y-m-d') }}</span>
                                                        </td>
                                                    </tr>

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
                                    <a href="{{route('dashboard')}}" class="card-footer-item"><i
                                            class="fa fa-plus-circle mr-1"></i> Adicionar Venda</a>
                                </div><!-- /.card-footer -->
                            </div>
                            {{-- End of table section --}}

                        </div>
                    </div>
                </div>
            </div>
    </main>

    @endrole

    @role('admin')

    {{--Inicio da parte de administrador--}}
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
                                    <h1 class="page-title mr-sm-auto"> Todas Vendas </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <button type="button" class="btn btn-light" onclick="printPage()"><i
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
                                            <div class="input-group input-group-alt">
                                                <div class="input-group has-clearable">
                                                    <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                                    </div>
                                                    <input id="table-search-sales" type="text" class="form-control" placeholder="Pesquisar vendas">
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-striped" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Nome do Producto </th>
                                                    <th> Quantidade </th>
                                                    <th> Metodo de Pagamento </th>
                                                    <th> Preco de Venda </th>
                                                    <th> Valor Total </th>
                                                    <th> Valor Pago </th>
                                                    <th> Troco </th>
                                                    <th> Data de Venda </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="sales-list">
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td class="align-middle"> {{ $product->stocks->product->Product_name }} </td>
                                                        <td class="align-middle"> {{ $product->Quantity }} </td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-success">{{$product->payments->Name_payment}}</span>
                                                        </td>
                                                        <td class="align-middle"> {{ number_format($product->Product_price,2,',','.',).' MZN' }}</td>
                                                        <td class="align-middle"> {{ number_format($product->Amount,2,',','.',).' MZN' }}</td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-primary">{{ number_format($product->Total_price,2,',','.',).' MZN' }}
                                                            </span></td>
                                                        <td class="align-middle"> {{
                                                            
                                                            number_format($troco=$product->Total_price - $product->Amount,2,',','.',).' MZN'
                                                            
                                                        }}</td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-warning">{{ \Carbon\Carbon::parse($product->created_at)->format('Y-m-d') }}</span>
                                                        </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
                                                                <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                                                            </button> 
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar productos--}}

                                                    <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{ route('deleteSaleHistory', ['id' => $product->id]) }}"
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
                                                                                    este Producto da Lista de Vendas ?</p>
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
                                                    </div><!-- /.modal -->
                                                    {{--Fim do modal de eliminar productos--}}

                                                @endforeach
                                                
                                            </tbody>
                                        </table>                                          
                                    </div><!-- /.table-responsive -->
                                    <div class="d-flex justify-content-center">
                                        {{ $products->links('vendor.pagination.simple-bootstrap-4') }}
                                    </div>
                                </div><!-- /.card-body -->
                                <!-- .card-footer -->
                            </div>
                            {{-- End of table section --}}

                        </div>
                    </div>
                </div>
            </div>
    </main>

    @endrole

    {{--Fim da parte de todas vendas--}}

@endsection
