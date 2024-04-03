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

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                <!-- .breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">
                                            <a href="#"><i
                                                    class="breadcrumb-icon fa fa-angle-left mr-2"></i>Eventos</a>
                                        </li>
                                    </ol>
                                </nav><!-- /.breadcrumb -->
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todos Eventos </h1><!-- .btn-toolbar -->
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
                                        <table class="table table-hover" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Nome do Evento </th>
                                                    <th> Data do Evento </th>
                                                    <th> Horario do Evento </th>
                                                    <th> Numero de Integrantes </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($events as $event)
                                                    <tr>
                                                        <td class="align-middle"> {{ $event->id }} </td>
                                                        <td class="align-middle"> {{ $event->Event_name }} </td>
                                                        <td class="align-middle"> {{ $event->Event_date }} </td>
                                                        <td class="align-middle"> {{ $event->Event_time }} </td>
                                                        <td class="align-middle"> {{ $event->Number_of_person }} </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal"
                                                                data-target="#clientNewModal{{ $event->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar--}}

                                                    {{--Fim do modal de eliminar--}}

                                                    {{--Inicio do modal de edicao--}}
                                                    <div class="modal fade" id="clientNewModal{{ $event->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updateEvent', ['id' => $event->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <div class="modal-content">
                                                                    <!-- .modal-header -->
                                                                    <div class="modal-header">
                                                                        <h6 id="clientNewModalLabel"
                                                                            class="modal-title inline-editable">
                                                                            <span class="sr-only">Formulario de Actualizacao
                                                                                de Eventos</span>
                                                                        </h6>
                                                                    </div><!-- /.modal-header -->
                                                                    <!-- .modal-body -->
                                                                    <div class="modal-body">
                                                                        <!-- .form-row -->
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cnContactName">Nome do
                                                                                        Evento</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Event_name"
                                                                                        value="{{ $event->Event_name }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cnContactEmail">Data do
                                                                                        Evento</label>
                                                                                    <input type="date" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Event_date"
                                                                                        value="{{ $event->Event_date }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cnStreet">Horario do
                                                                                        Evento</label>
                                                                                    <input type="time"
                                                                                        id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Event_time"
                                                                                        value="{{ $event->Event_time }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cnSuite">Integrantes
                                                                                        do Evento</label>
                                                                                    <input type="text"
                                                                                        id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Number_of_person"
                                                                                        value="{{ $event->Number_of_person }}">
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $event->id }}">
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Actualizar
                                                                            Evento</button>
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
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.card-body -->
                                <!-- .card-footer -->
                                <div class="card-footer">
                                    <a href="#clientContactNewModal" class="card-footer-item" data-toggle="modal"><i
                                            class="fa fa-plus-circle mr-1"></i> Adicionar Evento</a>
                                </div><!-- /.card-footer -->
                            </div>
                            {{-- End of table section --}}

                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
