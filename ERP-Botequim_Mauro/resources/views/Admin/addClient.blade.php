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
                    <div class="col-lg-4">
                        <div class="col">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Adicionar Cliente </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeClient')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Cliente</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Nome do Cliente" name="Name_client" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Apelido</label> <input type="text"
                                                class="form-control" placeholder="Codigo" id="input02" name="Surname" required="">
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Idade</label> <input type="text"
                                                class="form-control" placeholder="Codigo" id="input02" name="Age" required="">
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Morada</label> <input type="text"
                                                class="form-control" placeholder="Codigo" id="input02" name="Household" required="">
                                            </div><!-- /form column -->
                                            <input type="hidden" name="client_type" value="debit">
                                        </div>
                                        <button type="submit"
                                               name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Cliente</button>
                                        <a href="{{route('dashboard')}}" type="button" class="btn btn-light"
                                                                            data-dismiss="modal">Voltar</a>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>

                    {{--Inicio da tabela de todos clientes--}}


                    
                    {{--Fim da tabela de todos clientes--}}
                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
