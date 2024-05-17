@extends('Layout.topBar')
@section('content')
    {{-- Inicio da parte de vendas do atendente --}}

    <main class="app-main">
        <!-- .wrapper -->

        <div class="wrapper">
            <!-- .page -->
            <div class="page-section"></br>
                <div class="container-fluid">
                    <!-- grid row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- grid column -->


                                <div class="col-lg-4">
                                    <div class="d-md-flex align-items-md-start">
                                        <h1 class="page-title mr-sm-auto"> Lista de Productos Por Vender</h1>
                                    </div><!-- /title and toolbar -->
                                    <form method="post" action="{{ route('storeSale') }}">
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
                                                                @foreach ($stocks as $product)
                                                                    <option value="{{ $product->product->id }}">
                                                                        {{ $product->product->Product_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="input02">Preco do Producto</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Preco do Producto" id="Price"
                                                                name="Product_price" value="" disabled>
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
                                            <button type="submit" name="submit"
                                                class="btn btn-primary text-nowrap ml-auto" style="border-radius:0;"
                                                onclick="enableFields()">Adicionar Producto</button>
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
                                    </div><!-- /title and toolbar -->
                                    </header><!-- /.page-title-bar -->
                                    <!-- .page-section -->

                                    {{-- Table section --}}
                                    <div class="card mt-4" style="margin-top: -1rem">
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
                                                            <th>Valor de Compra</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($sales as $sale)
                                                            <tr>
                                                                <td class="align-middle">
                                                                    {{ $sale->stocks->product->Product_name }} </td>
                                                                <td class="align-middle"> {{ $sale->Product_price }}
                                                                </td>
                                                                <td class="align-middle"> {{ $sale->Quantity }}</td>
                                                                <td class="align-middle"> {{ $sale->Amount }}</td>
                                                                <td class="align-middle text-right">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-secondary"
                                                                        data-toggle="modal" data-target="#clientNewModal{{$sale->id}}"><i
                                                                            class="fa fa-pencil-alt"></i> <span
                                                                            class="sr-only">Edit</span></button>
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-secondary"><i
                                                                            class="far fa-trash-alt"
                                                                            data-target="#deleteRecordModal{{ $sale->id }}"
                                                                            data-toggle="modal"></i> <span
                                                                            class="sr-only">Remove</span></button>
                                                                </td>
                                                            </tr>

                                                            {{--Inicio do modal de remocao de productos--}}
                                                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $sale->id }}"
                                                                tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <form action="{{route('deleteSale',['id'=>$sale->id])}}" method="get">
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
                                                            {{--Fim do modal de remocao de productos--}}

                                                            {{--Inicio do modal de edicao de productos--}}
                                                            <div class="modal fade" id="clientNewModal{{$sale->id}}"
                                                                tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                                aria-hidden="true">
                                                                <!-- .modal-dialog -->
                                                                <div class="modal-dialog" role="document">
                                                                    <!-- .modal-content -->
                                                                    <form action="{{ route('storeSaleHistory') }}"
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
                                                                                                <option value="{{$stocks->Id_product}}">{{$stocks->product->Product_name}}</option>
                                                                                                @foreach ($stocks as $stocks)
                                                                                                    <option value="{{ $stock->product->id }}">{{ $stock->product->Product_name }}</option>
                                                                                                @endforeach
                                                                                            </select> 
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactName">Quantidade</label>
                                                                                            <input type="text" 
                                                                                                class="form-control"
                                                                                                name="Quantity" id="quantity"
                                                                                                placeholder="{{ $stock->Quantity }}" value="{{ $stock->Quantity }}">
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
                                                            {{--Fim do modal de edicao de productos--}}

                                                            {{--Inicio do modal de conclusao de venda--}}
                                                            <div class="modal fade" id="clientNewModal"
                                                                tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                                aria-hidden="true">
                                                                <!-- .modal-dialog -->
                                                                <div class="modal-dialog" role="document">
                                                                    <!-- .modal-content -->
                                                                    <form action="{{ route('storeSaleHistory') }}"
                                                                        method="post">
                                                                        @csrf
            
                                                                        <div class="modal-content">
                                                                            <!-- .modal-header -->
                                                                            <div class="modal-header">
                                                                                <h6 id="clientNewModalLabel"
                                                                                    class="modal-title inline-editable">
                                                                                    <span class="sr-only">Formulario de Venda</span>
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
                                                                                                    <label for="input01">Tipo de Pagamento</label> 
                                                                                                    <select class="form-control" name="Id_payment" id="Id_payment">
                                                                                                        <option selected>-- Selecione a opcao --</option>
                                                                                                        @foreach ($payments as $payment)
                                                                                                        <option value="{{$payment->id}}">{{$payment->Name_payment}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="cnContactEmail">Valor a Pagar</label>
                                                                                                    <input type="text" placeholder="Valor a Pagar"
                                                                                                        class="form-control"
                                                                                                        name="Total_price">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><!-- /.form-row -->
            
                                                                                    </div>
                                                                                </div><!-- /.form-row -->
            
                                                                            </div><!-- /.modal-body -->
                                                                            <!-- .modal-footer -->
                                                                            <div class="modal-footer">
                                                                                <button type="submit" name="submit"
                                                                                    class="btn btn-primary">Concluir Venda</button>
                                                                                <button type="button" class="btn btn-light"
                                                                                    data-dismiss="modal">Fechar</button>
                                                                            </div><!-- /.modal-footer -->
                                                                        </div><!-- /.modal-content -->
                                                                    </form>
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            {{--Fim do modal de conclusao de venda--}}
                                                        @endforeach
                                                        {{-- Fim do modal de editar --}}
                                                    </tbody>
                                                    <tfoot>
                                                        <div style="text-align: center">
                                                            <td class="align-middle">
                                                                <button class="btn text-nowrap ml-auto"
                                                                    style="background-color: black;color:white; border-radius:0;
                                                                    width:330%">Valor
                                                                    Total: {{$amount}} MT</button>
                                                            </td>
                                                        </div>
                                                    </tfoot>
                                                </table>

                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success text-nowrap ml-auto"
                                    data-toggle="modal" data-target="#clientNewModal" style="border-radius: 0">Efectuar
                                        Venda</button>
                                    <button type="submit" name="submit" class="btn btn-danger text-nowrap ml-auto"
                                        onclick="enableField()" style="border-radius: 0">Eliminar todos productos</button>
                            </div>


                            {{-- Fim da tabela de todos clientes --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        {{-- Fim da parte de vendas do atendente --}}
    @endsection
