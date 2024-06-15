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
                    <div class="car">
                        <div class="card-body">
                            <div class="row">
                                <!-- grid column -->


                                <div class="col-lg-4">
                                    <div class="d-md-flex align-items-md-start">
                                        <h1 class="page-title mr-sm-auto"> Lista de Productos Por Vender</h1>
                                    </div><!-- /title and toolbar -->
                                    <form id="saleForm" method="post" action="{{ route('storeSale') }}">
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
                                                            <select class="form-control @error('Id_stock') is-invalid @enderror" name="Id_stock" id="Id_product"
                                                                onchange="prod(this);" required>
                                                                <option>--Selecione o Producto --</option>
                                                                @foreach ($stocks as $product)
                                                                    <option value="{{ $product->product->id }}">
                                                                        {{ $product->product->Product_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('Id_stock')
                                                                <div class="invalid-feedback">
                                                                    <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="input02">Preco do Producto</label>
                                                            <input type="text" class="form-control" placeholder="Preco do Producto" id="Price" name="Product_price" value="" disabled>
                                                        </div><!-- /form column -->
                                                        <div class="col-md-12 mb-3">
                                                            <label for="input02">Quantidade</label>
                                                            <input type="number" class="form-control @error('Quantity') is-invalid @enderror" placeholder="Quantidade" id="input02" name="Quantity" required>
                                                            @error('Quantity')
                                                                <div class="invalid-feedback">
                                                                    <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                                </div>
                                                            @enderror
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
                                                                <td class="align-middle"> {{ $sale->Product_price }} MZN
                                                                </td>
                                                                <td class="align-middle"> {{ $sale->Quantity }}</td>
                                                                <td class="align-middle"> {{ $sale->Amount }} MZN</td>
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
                                                                    <form action="{{ route('updateSale',['id'=>$sale->id]) }}"
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
                                                                                            <select class="form-control" name="Id_stock" id="Id_product" onchange="pro(this);">
                                                                                                <option value="{{ $sale->stocks->product->id }}">{{ $sale->stocks->product->Product_name }}</option>
                                                                                                <option>---------- ---------</option>
                                                                                                @foreach ($stocks as $stock) <!-- Corrigido duplicação de variável -->
                                                                                                    <option value="{{ $stock->product->id }}">{{ $stock->product->Product_name }}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Preco</label>
                                                                                            <input type="text" id="Pric" class="form-control"
                                                                                                name="Product_price"
                                                                                                placeholder="{{ $sale->Product_price }}"  value="" disabled>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactName">Quantidade</label>
                                                                                            <input type="text" 
                                                                                                class="form-control"
                                                                                                name="Quantity" id="quantity"
                                                                                                placeholder="{{ $sale->Quantity }}" value="{{ $sale->Quantity }}">
                                                                                        </div>

                                                                                    </div>
                                                                                    <input type="hidden" name="id"
                                                                                        value="{{ $sale->id }}">
                                                                                </div><!-- /.form-row -->
        
                                                                            </div><!-- /.modal-body -->
                                                                            <!-- .modal-footer -->
                                                                            <div class="modal-footer">
                                                                                <button type="submit" name="submit"
                                                                                    class="btn btn-primary" onclick="enable()">Actualizar
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
                                                                                                
                                                                                                {{--Inicio do valor total--}}
                                                                                                <div class="form-group">
                                                                                                    <label for="totalPrice">Valor Total</label>
                                                                                                    <input type="text" placeholder="Valor a Pagar" class="form-control" id="total_price" value="{{ $amount }}" disabled>
                                                                                                </div>
                                                                                                {{--Fim do input do valor total--}}
                                                                                                
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
                                                                                                    <label for="amountPaid">Valor a Pagar</label>
                                                                                                    <input type="number" placeholder="Valor a Pagar" class="form-control" name="Total_price" id="amount_paid">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="change">Troco</label>
                                                                                                    <input type="text" class="form-control" name="Change" id="change" placeholder="Valor de troco" disabled>
                                                                                                </div>
                                                                                                {{--Fim do campo de troco--}}
                                                                                            </div>
                                                                                        </div><!-- /.form-row -->

                                                                                        <script>
                                                                                        document.addEventListener('DOMContentLoaded', function () {
                                                                                            const totalPriceInput = document.getElementById('total_price');
                                                                                            const amountPaidInput = document.getElementById('amount_paid');
                                                                                            const changeInput = document.getElementById('change');
                                                                                        
                                                                                            amountPaidInput.addEventListener('input', function () {
                                                                                                const totalPrice = parseFloat(totalPriceInput.value);
                                                                                                const amountPaid = parseFloat(amountPaidInput.value);
                                                                                        
                                                                                                if (!isNaN(totalPrice) && !isNaN(amountPaid)) {
                                                                                                    const change = amountPaid - totalPrice;
                                                                                                    changeInput.value = change >= 0 ? change.toFixed(2) : 0;
                                                                                                } else {
                                                                                                    changeInput.value = 0;
                                                                                                }
                                                                                            });

                                                                                            //Inicio do metodo para gerar um recibo de pagamento
                                                                                            paymentForm.addEventListener('submit', function (event) {
                                                                                                event.preventDefault();

                                                                                                // Aqui você pode adicionar a lógica para processar o pagamento no backend

                                                                                                // Após processar o pagamento, exiba o botão de impressão do recibo
                                                                                                printReceiptBtn.style.display = 'inline-block';
                                                                                            });

                                                                                            printReceiptBtn.addEventListener('click', function () {
                                                                                                printReceipt();
                                                                                            });

                                                                                            function printReceipt() {
                                                                                                const receiptContent = `
                                                                                                    <h1>Recibo de Venda</h1>
                                                                                                    <p>Produto: ${totalPriceInput.dataset.productName}</p>
                                                                                                    <p>Quantidade: ${totalPriceInput.dataset.quantity}</p>
                                                                                                    <p>Preço de Venda: ${totalPriceInput.value} MZN</p>
                                                                                                    <p>Valor Pago: ${amountPaidInput.value} MZN</p>
                                                                                                    <p>Troco: ${changeInput.value} MZN</p>
                                                                                                    <p>Data de Venda: ${new Date().toLocaleDateString()}</p>
                                                                                                `;
                                                                                                const receiptWindow = window.open('', '', 'width=600,height=400');
                                                                                                receiptWindow.document.write(receiptContent);
                                                                                                receiptWindow.document.close();
                                                                                                receiptWindow.print();
                                                                                            }
                                                                                        });
                                                                                        </script>
            
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
                                                                <button class="btn text-nowrap ml-auto" id="Amount" style="background-color: rgb(142, 142, 142); color:white; border-radius:0; width:330%;">
                                                                    Valor Total: {{$amount}} MZN
                                                                </button>
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
                                    
                                    <a href="{{route('deleteAllSale')}}" type="submit" name="submit" class="btn btn-danger text-nowrap ml-auto"
                                    onclick="enableField()" style="border-radius: 0">Eliminar todos productos</a>
                                
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
