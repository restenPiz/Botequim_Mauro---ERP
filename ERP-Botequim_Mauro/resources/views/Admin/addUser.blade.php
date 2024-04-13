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

                    {{--Inicio da parte de formulario de adicao de usuarios--}}
                    <div class="col-lg-4">
                        <div class="col">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Adicionar Usuarios </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeUser')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Digite o seu nome" name="name" required="">
                                            </div><!-- /form column -->
                                        </div><!-- /form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Apelido</label> <input type="text"
                                                    class="form-control" id="input02" placeholder="Digite o seu apelido" name="Surname" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        {{--Inicio do input type select--}}
                                        <div class="form-group">
                                            <label>Tipo de Usuario</label>
                                            <select class="form-control" name="user_type">
                                                <option >-- Selecione --</option>
                                                <option value="Attendant">Atendente</option>
                                                <option value="Stock_manager">Gestor de Stock</option>
                                                <option value="Accountant">Contabilista</option>
                                            </select>
                                        </div>
                                        {{--Fim do input type select--}}
                                        <!-- .form-group -->
                                        <div class="form-group">
                                            <label for="input03">Email</label> <input type="email" class="form-control"
                                                id="input03" placeholder="Ex: contacto@mauropeniel.info" name="email" required="">
                                        </div><!-- /.form-group -->
                                        <!-- .form-group -->
                                        <div class="form-group">
                                            <label for="input04">Senha</label> <input type="password"
                                                class="form-control" id="input04" placeholder="Digite a sua senha" name="password" required="">
                                        </div><!-- /.form-group -->
                                        
                                        <!-- .form-actions -->
                                        <div class="form-group">
                                            <label for="input04">Senha de Confirmacao</label> <input type="password"
                                                class="form-control" id="input04" placeholder="Digite novamente a sua senha" name="password_confirmation" required="">
                                        </div><!-- /.form-group -->
                                        <div class="form-actions">
                                            <button type="submit"
                                               name="submit" class="btn btn-primary ">Adicionar Usuario</button>
                                        </div>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>

                    {{--Fim do formulario de adicao de usuarios--}}

                    {{--Inicio da tabela de todos usuarios--}}

                    <div class="col-lg-8">
                        <div class="col">

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todos Usuarios </h1><!-- .btn-toolbar -->
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
                                                    <th> Nome do Usuario </th>
                                                    <th> Apelido </th>
                                                    <th> Email </th>
                                                    <th>Tipo de Usuario</th>
                                                    <th> Data de Entrada </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td class="align-middle"> {{ $user->name }}</td>
                                                        <td class="align-middle"> {{ $user->Surname }} </td>
                                                        <td class="align-middle"> 
                                                            <span class="badge badge-subtle badge-success">{{$user->email}}</span>
                                                        </td>
                                                        <td class="align-middle"> {{ $user->user_type }} </td>
                                                        <td class="align-middle"> {{ $user->created_at }} </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal" data-target="#clientNewModal{{ $user->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt" data-target="#deleteRecordModal{{ $user->id }}" data-toggle="modal"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar--}}
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $user->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{route('deleteUser',['id'=>$user->id])}}" method="get">
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
                                                                                 este Usuario ?</p>
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
                                                    <div class="modal fade" id="clientNewModal{{ $user->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updateUser', ['id' => $user->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <div class="modal-content">
                                                                    <!-- .modal-header -->
                                                                    <div class="modal-header">
                                                                        <h6 id="clientNewModalLabel"
                                                                            class="modal-title inline-editable">
                                                                            <span class="sr-only">Formulario de Actualizacao
                                                                                de Usuarios</span>
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
                                                                                            <label for="cnContactName">Nome do Usuario</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="name"
                                                                                                value="{{$user->name}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Apelido</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Surname" 
                                                                                                value="{{$user->Surname}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Tipo de Usuario</label>
                                                                                            <select class="form-control" name="user_type" disabled>
                                                                                                <option value="{{$user->user_type}}">{{$user->user_type}}</option>
                                                                                                <option value="Attendant">Atendente</option>
                                                                                                <option value="Stock_manager">Gestor de Stock</option>
                                                                                                <option value="Accountant">Contabilista</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Email</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="email" 
                                                                                                value="{{$user->email}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Senha</label>
                                                                                            <input type="password" id="cnContactName" class="form-control" name="password">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Senha de Confirmacao</label>
                                                                                            <input type="password" id="cnContactName" class="form-control" name="password_confirmation">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.form-row -->
        
                                                                            </div><!-- /.modal-body -->
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $user->id }}">
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Actualizar
                                                                            Usuario</button>
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
                            </div>
                            {{-- End of table section --}}

                        </div>
                    </div>
                        
                    {{--Fim da tabela de todos os usuarios--}}

                </div>
            </div>
        </div>

        {{-- Fim do conteudo da parte de adicao de usuarios --}}
    @endsection
