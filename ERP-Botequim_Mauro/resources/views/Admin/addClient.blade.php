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
                                                class="form-control" placeholder="Apelido" id="input02" name="Surname" required="">
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Idade</label> <input type="text"
                                                class="form-control" placeholder="Idade" id="input02" name="Age" required="">
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Morada</label> <input type="text"
                                                class="form-control" placeholder="Morada" id="input02" name="Household" required="">
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

                    <div class="col-lg-8">
                        <div class="col">

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todos Clientes </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <button type="button" class="btn btn-light"><i
                                                class="oi oi-data-transfer-download"></i> <span
                                                class="ml-1">Exportar</span></button> <button type="button"
                                            class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
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
                                        </div>
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
                                        <table class="table table-striped" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Nome do Cliente </th>
                                                    <th> Apelido </th>
                                                    <th> Idade </th>
                                                    <th> Morada </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($clients as $client)
                                                    <tr>
                                                        <td class="align-middle"> {{ $client->Name_client }}</td>
                                                        <td class="align-middle"> {{ $client->Surname }} </td>
                                                        <td class="align-middle"> {{ $client->Age }} </td>
                                                        <td class="align-middle"> {{ $client->Household }} </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="fa fa-eye"></i> <span
                                                                    class="sr-only">Show</span><a href="{{route('showClient')}}"></a></button>
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal" data-target="#clientNewModal{{ $client->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt" data-target="#deleteRecordModal{{ $client->id }}" data-toggle="modal"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar--}}
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $client->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{route('deleteClient',['id'=>$client->id])}}" method="get">
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
                                                                                 este Cliente ?</p>
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

                                                    {{--Inicio do modal de editar--}}
                                                    <div class="modal fade" id="clientNewModal{{ $client->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updateClient', ['id' => $client->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <div class="modal-content">
                                                                    <!-- .modal-header -->
                                                                    <div class="modal-header">
                                                                        <h6 id="clientNewModalLabel"
                                                                            class="modal-title inline-editable">
                                                                            <span class="sr-only">Formulario de Actualizacao
                                                                                de Clientes</span>
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
                                                                                            <label for="cnContactName">Nome do Cliente</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Name_client"
                                                                                                value="{{$client->Name_client}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Apelido</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Surname" 
                                                                                                value="{{$client->Surname}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Idade</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Age" 
                                                                                                value="{{$client->Age}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Morada</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Household" 
                                                                                                value="{{$client->Household}}">
                                                                                        </div>
                                                                                        <input type="hidden" name="client_type" value="debit">
                                                                                    </div>
                                                                                </div><!-- /.form-row -->
        
                                                                            </div><!-- /.modal-body -->
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $client->id }}">
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Actualizar
                                                                            Cliente</button>
                                                                        <button type="button" class="btn btn-light"
                                                                            data-dismiss="modal">Fechar</button>
                                                                    </div><!-- /.modal-footer -->
                                                                </div><!-- /.modal-content -->
                                                            </form>
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    {{--Fim do modal de editar--}}

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    {{--Fim da tabela de todos clientes--}}
                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
