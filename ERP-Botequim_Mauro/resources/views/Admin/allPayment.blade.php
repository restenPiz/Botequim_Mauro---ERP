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
                    <div class="col-lg-7">
                        <div class="col">

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                <!-- .breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">
                                            <a href="#"><i
                                                    class="breadcrumb-icon fa fa-angle-left mr-2"></i>Categorias</a>
                                        </li>
                                    </ol>
                                </nav><!-- /.breadcrumb -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todos os Tipos de Pagamentos </h1><!-- .btn-toolbar -->
                                </div><!-- /title and toolbar -->
                            </header><!-- /.page-title-bar -->
                            <!-- .page-section -->

                            {{-- Table section --}}
                            <div class="card mt-4" style="margin-top:-4rem">
                                <!-- .card-body -->
                                <div class="card-body">
                                    {{-- <h2 class="card-title"> Contacts </h2><!-- .table-responsive --> --}}
                                    <div class="table-responsive">
                                        @if(count($payments)>0)
                                        <table id="stock-table" class="table table-hover" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Nome do Pagamento </th>
                                                    <th> Codigo </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($payments as $payment)
                                                    <tr>
                                                        <td class="align-middle"> {{ $payment->Name_payment }} </td>
                                                        <td class="align-middle"> {{ $payment->Code }} </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal"
                                                                data-target="#clientNewModal{{ $payment->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt" data-target="#deleteRecordModal{{ $payment->id }}" data-toggle="modal"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar--}}
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $payment->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{route('deletePayment',['id'=>$payment->id])}}" method="get">
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
                                                                                 {{$payment->Name_payment}} ?</p>
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
                                                    <div class="modal fade" id="clientNewModal{{ $payment->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updatePayment', ['id' => $payment->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <div class="modal-content">
                                                                    <!-- .modal-header -->
                                                                    <div class="modal-header">
                                                                        <h6 id="clientNewModalLabel"
                                                                            class="modal-title inline-editable">
                                                                            <span class="sr-only">Formulario de Actualizacao
                                                                                de Tipo de Pagamentos</span>
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
                                                                                            <label for="cnContactName">Nome do Tipo de Pagamento</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Name_payment"
                                                                                                value="{{$payment->Name_payment}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Codigo</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Code" 
                                                                                                value="{{$payment->Code}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.form-row -->
        
                                                                            </div><!-- /.modal-body -->
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $payment->id }}">
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Actualizar
                                                                            Tipo de Pagamento</button>
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
                                        @else
                                        <div class="tab-pane fade" id="project-explore-teams" role="tabpanel">
                                            <div class="alert alert-warning mx-3"> A tabela esta vazia. Adicione as categorias! </div>
                                        </div>
                                        @endif
                                    </div>
                                    
                                    <div class="d-flex justify-content-center">
                                        {{ $payments->links('vendor.pagination.simple-bootstrap-4') }}
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.card-body -->
                                </div>
                            {{-- End of table section --}}

                        </div>
                    </div>

                    {{--Inicio da seccao do formulario de adicao de categorias--}}
                    
                    <div class="col-lg-5"><br><br><br><br><br>
                        <div class="col">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Adicionar Tipo de Pagamento </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storePayment')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome do Tipo de Pagamento</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Nome do Tipo de Pagamento" name="Name_payment" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Codigo</label> <input type="text"
                                                class="form-control" placeholder="Codigo" id="input02" name="Code" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <button type="submit"
                                               name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Tipo de Pagamento</button>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>
                    {{--Fim da seccao do formulario de adicao de categorias--}}

                </div>
            </div>
    </main>
@endsection
