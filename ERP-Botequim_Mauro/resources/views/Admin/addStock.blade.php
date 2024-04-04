@extends('Layout.top')
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
                    <div class="col-lg-12">
                        <div class="col">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Adicionar Mercadoria </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeStock')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Nome do Product</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Nome do Producto" name="Product_name" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Quantidade</label> <input type="text"
                                                    class="form-control" id="input02" placeholder="Quantidade" name="Quantity" required="">
                                            </div><!-- /form column -->
                                        </div><!-- /form row -->
                                        {{--Inicio do input type select--}}
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Codigo de Barro</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Codigo de Barra" name="Barcode" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Preco do Producto</label> <input type="text"
                                                    class="form-control" id="input02" placeholder="Preco do Producto"  name="Price" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Data de Entrada</label> <input type="date"
                                                    class="form-control" id="input01" name="Entry_date" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Data de Validade</label> <input type="date"
                                                    class="form-control" id="input01" name="Expiry_date" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Numero de Factura</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Numero de Factura" name="Invoice_number" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Mercadoria</button>
                                        <a href="{{route('allStock')}}" type="button" class="btn btn-light" data-dismiss="modal">Voltar</a>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
