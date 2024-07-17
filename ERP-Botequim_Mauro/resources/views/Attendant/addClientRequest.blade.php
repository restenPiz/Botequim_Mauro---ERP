@extends('Layout.topBar')
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
                                <h6 class="card-header"> Adicionar Mesa </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeClient')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- Nome do Cliente -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Nome da Mesa</label>
                                                <input type="text" class="form-control @error('Name_client') is-invalid @enderror" id="input01" placeholder="Nome da Mesa" name="Name_client" value="{{ old('Name_client') }}" required>
                                                @error('Name_client')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="input03">Numero da Mesa</label>
                                                <input type="number" class="form-control @error('Age') is-invalid @enderror" id="input03" placeholder="Numero da Mesa" name="Age" value="{{ old('Age') }}" required>
                                                @error('Age')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            {{--Inicios dos campos hidden do sistema--}}
                                            <input type="hidden" class="form-control" id="input02" name="Surname" value="Mesa" required>
                                            {{-- <input type="hidden" class="form-control"  id="input03" name="Age" value="0" required> --}}
                                            <input type="hidden" class="form-control" id="input04" name="Household" value="Mossurize" required>
                                            <input type="hidden" name="client_type" value="request">
                                            {{--Fim dos campos hidden do sistema--}}

                                            <!-- Apelido -->
                                            {{-- <div class="col-md-12 mb-3">
                                                <label for="input02">Apelido</label>
                                                <input type="text" class="form-control @error('Surname') is-invalid @enderror" id="input02" placeholder="Apelido" name="Surname" value="{{ old('Surname') }}" required>
                                                @error('Surname')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                            <!-- Idade -->
                                            
                                            <!-- Morada -->
                                            {{-- <div class="col-md-12 mb-3">
                                                <label for="input04">Morada</label>
                                                <input type="text" class="form-control @error('Household') is-invalid @enderror" id="input04" placeholder="Morada" name="Household" value="{{ old('Household') }}" required>
                                                @error('Household')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        <button type="submit"
                                               name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Mesa</button>
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
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todos Mesas </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
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
                                        <table id="stock-table" class="table table-striped" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Nome da Mesa </th>
                                                    {{-- <th> Apelido </th> --}}
                                                    <th> Numero de Mesa </th>
                                                    {{-- <th> Morada </th> --}}
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($clients as $client)
                                                    <tr>
                                                        <td class="align-middle"> {{ $client->Name_client }}</td>
                                                        {{-- <td class="align-middle"> {{ $client->Surname }} </td> --}}
                                                        <td class="align-middle"> {{ $client->Age }} </td>
                                                        {{-- <td class="align-middle"> {{ $client->Household }} </td> --}}
                                                        <td class="align-middle text-right">
                                                           <a class="btn btn-sm btn-icon btn-secondary" href="showClientRequest/{{$client->id}}"><i
                                                            class="fa fa-eye"></i> <span
                                                            class="sr-only">Show</span></a>
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
                                                                                  {{$client->Name_client}} ?</p>
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
                                                                                de Mesas</span>
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
                                                                                            <label for="cnContactName">Nome da Mesa</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Name_client"
                                                                                                value="{{$client->Name_client}}">
                                                                                        </div>
                                                                                        {{-- <div class="form-group">
                                                                                            <label for="cnContactEmail">Apelido</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Surname" 
                                                                                                value="{{$client->Surname}}">
                                                                                        </div> --}}
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Numero de Mesa</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Age" 
                                                                                                value="{{$client->Age}}">
                                                                                        </div>
                                                                                        {{-- <div class="form-group">
                                                                                            <label for="cnContactEmail">Morada</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Household" 
                                                                                                value="{{$client->Household}}">
                                                                                        </div> --}}
                                                                                        <input type="hidden" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Surname" 
                                                                                                value="{{$client->Surname}}">
                                                                                                <input type="hidden" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Household" 
                                                                                                value="{{$client->Household}}">
                                                                                        <input type="hidden" name="client_type" value="request">
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
