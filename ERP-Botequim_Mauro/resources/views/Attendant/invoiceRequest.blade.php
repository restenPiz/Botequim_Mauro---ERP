@extends('Layout.Another')
@section('content')
    {{-- inicio do recibo de pedidos --}}

    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper" style="width: 55rem;height:150vh">
            <!-- .page -->
            <div class="page ">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <!-- .breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href="{{route('showClientRequest',['id'=>$clients->id])}}"><i
                                            class="breadcrumb-icon fa fa-angle-left mr-2"></i>Voltar</a>
                                </li>
                            </ol>
                        </nav><!-- /.breadcrumb -->
                        <div class="d-md-flex">
                            <h1 class="page-title"> INV-65D9E592 </h1>
                            <div class="ml-auto">
                                <button type="button" data-toggle="modal" data-target="#clientNewModal" class="btn btn-primary">Efectuar Pagamento</button>
                            </div>
                        </div>
                    </header><!-- /.page-title-bar -->
                    {{--Inicio do modal de conclusao de venda--}}
                    <div class="modal fade" id="clientNewModal"
                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                        aria-hidden="true">
                        <!-- .modal-dialog -->
                        <div class="modal-dialog" role="document">
                            <!-- .modal-content -->
                            <form action="{{ route('storeSaleRequest',['id'=>$clients->id]) }}"
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

                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <!-- .invoice-wrapper -->
                            <div class="invoice-wrapper">
                                <!-- .invoice-actions -->
                                <div class="invoice-actions">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-lg btn-secondary rounded-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-caret-down"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow mr-1"></div><button type="button" id="download-pdf"
                                                class="dropdown-item">Download PDF</button> 
                                        </div>
                                    </div>
                                </div><!-- /.invoice-actions -->
                                <!-- .invoice -->
                                <div id="invoice" class="invoice" data-id="INV-65D9E592">
                                    <!-- .invoice-header -->
                                    <div class="invoice-header">
                                        <!-- grid row -->
                                        <div class="row">
                                            <!-- .col -->
                                            <div class="col d-flex">
                                                <h2 class="invoice-brand align-self-center">
                                                    <img src="/../assets/logo1.png" width="300" alt="">
                                                </h2>
                                            </div><!-- /.col -->
                                            <!-- .col -->
                                            <div class="col">
                                                <table class="table table-borderless table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <small>Total (MT)</small>
                                                                <h5> {{$count}} MT </h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <small>Invoice No</small><br>
                                                                <h5> INV-65D9E592 </h5>
                                                            </td>
                                                            <td>
                                                                <small>Due Date</small><br>
                                                                <h5> Jan 18, 2019 </h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.col -->
                                        </div><!-- /grid row -->
                                    </div><!-- /.invoice-header -->
                                    <!-- .invoice-body -->
                                    <div class="invoice-body">
                                        <!-- grid row -->
                                        <div class="row">
                                            <!-- .col -->
                                            <div class="col">
                                                <!-- .invoice-sender -->
                                                <div class="invoice-sender">
                                                    <dl>
                                                        <dt> De: </dt>
                                                        <dd> Botequim Mauro </dd>
                                                        <dd> Espungabera<br> Provincia de Manica </dd>
                                                    </dl>
                                                </div><!-- /.invoice-recipient -->
                                            </div><!-- /.col -->
                                            <!-- .col -->
                                            <div class="col">
                                                <!-- .invoice-recipient -->
                                                <div class="invoice-recipient">
                                                    <dl>
                                                        <dt> Direcionado para: </dt>
                                                        <dd> {{$clients->Name_client}} </dd>
                                                        <dd> {{$clients->Household}} </dd>
                                                    </dl>
                                                </div><!-- /.invoice-recipient -->
                                            </div><!-- /.col -->
                                        </div><!-- /grid row -->
                                        <table class="table table-sm">
                                            <caption class="invoice-title">
                                                <span>Lista de Pedidos - </span><span class="text-primary">Botequim Mauro</span>
                                                
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 375px"> Productos </th>
                                                    <th class="text-right"> Qty </th>
                                                    <th> Price </th>
                                                    <th class="text-right"> Valor (MT) </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($requests as $request)
                                                    <tr>
                                                        <td> {{ $request->products->product->Product_name }} </td>
                                                        <td class="text-right"> {{ $request->Quantity }} </td>
                                                        <td> {{ $request->Product_price }} MT </td>
                                                        <td class="text-right"> {{ $request->Product_price * $request->Quantity }} MT </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot class="table-borderless">
                                                <tr>
                                                    <th colspan="2"></th>
                                                    <th> Total </th>
                                                    <th class="text-right"> {{$count}} MT </th>
                                                </tr>
                                                {{-- <tr>
                                                    <th colspan="2"></th>
                                                    <th> Coupon </th>
                                                    <th class="text-right"> $100,00 </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2"></th>
                                                    <th> Due </th>
                                                    <th class="text-right"> $3.096,00 </th>
                                                </tr> --}}
                                            </tfoot>
                                        </table>
                                    </div><!-- /.invoice-body -->
                                    <!-- .invoice-footer -->
                                    <div class="invoice-footer">
                                        <p>
                                            <strong>Thanks for buying or notes</strong>. Please click button with caret down
                                            icon above to generate and download this invoice in pdf format.
                                        </p>
                                    </div><!-- /.invoice-footer -->
                                </div><!-- /.invoice -->
                            </div><!-- /.invoice-wrapper -->
                        </div><!-- /.section-block -->
                    </div><!-- /.page-section -->
                </div><!-- /.page-inner -->
                <!-- .page-sidebar -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </main> {{-- Fim do recibo de pedidos --}}
@endsection
