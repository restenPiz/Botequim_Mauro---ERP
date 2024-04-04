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
                                                    class="breadcrumb-icon fa fa-angle-left mr-2"></i>Categorias</a>
                                        </li>
                                    </ol>
                                </nav><!-- /.breadcrumb -->
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Todas Categorias </h1><!-- .btn-toolbar -->
                                    <div class="btn-toolbar">
                                        <button type="button" class="btn btn-light"><i
                                                class="oi oi-data-transfer-download"></i> <span
                                                class="ml-1" data-target="#clientNew" data-toggle="modal">Exportar</span></button> <button type="button"
                                            class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span
                                                class="ml-1">Importar</span></button>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-light"
                                                data-toggle="dropdown"><span>Mais</span> <span
                                                    class="fa fa-caret-down"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-arrow"></div><a href="#"
                                                    class="dropdown-item" data-target="#clientNew" data-toggle="modal">Add tasks</a> <a href="#"
                                                    class="dropdown-item">Invite members</a>
                                                <div class="dropdown-divider"></div><a href="#"
                                                    class="dropdown-item">Share</a> 
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
                                        @if(count($categories)>0)
                                        <table class="table table-hover" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Nome da Categoria </th>
                                                    <th> Codigo </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td class="align-middle"> {{ $category->id }} </td>
                                                        <td class="align-middle"> {{ $category->Category_name }} </td>
                                                        <td class="align-middle"> {{ $category->Code }} </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal"
                                                                data-target="#clientNewModal{{ $category->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt" data-target="#deleteRecordModal{{ $category->id }}" data-toggle="modal"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do Modal para adicao de eventos--}}
                                                    <div class="modal fade" id="clientNew"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('storeCategories') }}"
                                                                method="post">
                                                                @csrf

                                                                <div class="modal-content">
                                                                    <!-- .modal-header -->
                                                                    <div class="modal-header">
                                                                        <h6 id="clientNewModalLabel"
                                                                            class="modal-title inline-editable">
                                                                            Formulario de Adicao
                                                                                de Categorias
                                                                        </h6>
                                                                    </div><!-- /.modal-header -->
                                                                    <!-- .modal-body -->
                                                                    <div class="modal-body">
                                                                        <!-- .form-row -->
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="cnContactName">Nome da Categoria</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Category_name"
                                                                                        placeholder="Nome do Evento">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cnContactEmail">Codigo da Categoria</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Code" placeholder="Codigo da Categoria"
                                                                                        value="">
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Adicionar
                                                                            Categoria</button>
                                                                        <button type="button" class="btn btn-light"
                                                                            data-dismiss="modal">Fechar</button>
                                                                    </div><!-- /.modal-footer -->
                                                                </div><!-- /.modal-content -->
                                                            </form>
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    
                                                    {{--Fim do modal para adicao de eventos--}}

                                                    {{--Inicio do modal de eliminar--}}
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $category->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{route('deleteCategories',['id'=>$category->id])}}" method="get">
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
                                                                                 esta Categoria ?</p>
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
                                                    <div class="modal fade" id="clientNewModal{{ $category->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updateCategories', ['id' => $category->id]) }}"
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
                                                                            <div class="modal-body">
                                                                                <!-- .form-row -->
                                                                                <div class="form-row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactName">Nome da Categoria</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Category_name"
                                                                                                value="{{$category->Category_name}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="cnContactEmail">Codigo da Categoria</label>
                                                                                            <input type="text" id="cnContactName"
                                                                                                class="form-control"
                                                                                                name="Code" 
                                                                                                value="{{$category->Code}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.form-row -->
        
                                                                            </div><!-- /.modal-body -->
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $category->id }}">
                                                                        </div><!-- /.form-row -->

                                                                    </div><!-- /.modal-body -->
                                                                    <!-- .modal-footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit"
                                                                            class="btn btn-primary">Actualizar
                                                                            Category</button>
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
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.card-body -->
                                <!-- .card-footer -->
                                <div class="card-footer">
                                    <a href="#clientNew" class="card-footer-item" data-target="#clientNew" data-toggle="modal"><i
                                            class="fa fa-plus-circle mr-1"></i> Adicionar Categoria</a>
                                </div><!-- /.card-footer -->
                            </div>
                            {{-- End of table section --}}

                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
