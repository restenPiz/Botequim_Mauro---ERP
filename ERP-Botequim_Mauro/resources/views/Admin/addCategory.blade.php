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
                                <h6 class="card-header"> Adicionar Categoria </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeCategories')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Nome da Categoria</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Nome da Categoria" name="Category_name" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Codigo</label> <input type="date"
                                                    class="form-control" id="input02" name="Code" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <hr>
                                        <button type="submit"
                                               name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Categoria</button>
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
