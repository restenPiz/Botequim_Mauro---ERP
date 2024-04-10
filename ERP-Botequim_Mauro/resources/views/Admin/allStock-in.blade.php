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
                    <div class="col-lg-8">
                        <div class="col">

                            {{-- Inicio da tabela de todos eventos --}}
                            <header class="page-title-bar">
                                <!-- floating action -->
                                <button type="button" class="btn btn-success btn-floated"><span
                                        class="fa fa-plus"></span></button> <!-- /floating action -->
                                <!-- title and toolbar -->
                                <div class="d-md-flex align-items-md-start">
                                    <h1 class="page-title mr-sm-auto"> Entrada de Productos </h1><!-- .btn-toolbar -->
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
                                                    <th> Nome do Producto </th>
                                                    <th> Quantity </th>
                                                    <th> Codigo </th>
                                                    <th> Preco </th>
                                                    <th> Data de Entrada </th>
                                                    <th> Data de Validade </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($stocks as $stock)
                                                    <tr>
                                                        <td class="align-middle"> {{ $stock->id }} </td>
                                                        <td class="align-middle"> {{ $stock->name($stock->id) }}</td>
                                                        <td class="align-middle"> {{ $stock->Quantity }} </td>
                                                        <td class="align-middle"> {{ $stock->Code }} </td>
                                                        <td class="align-middle"> {{ $stock->Price }} </td>
                                                        <td class="align-middle"> {{ $stock->Entry_date }} </td>
                                                        <td class="align-middle"> {{ $stock->Expiry_date }} </td>
                                                        <td class="align-middle text-right">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-toggle="modal" data-target="#clientNewModal{{ $stock->id }}"><i
                                                                    class="fa fa-pencil-alt"></i> <span
                                                                    class="sr-only">Edit</span></button> <button
                                                                type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                    class="far fa-trash-alt" data-target="#deleteRecordModal{{ $stock->id }}" data-toggle="modal"></i> <span
                                                                    class="sr-only">Remove</span></button>
                                                        </td>
                                                    </tr>

                                                    {{--Inicio do modal de eliminar--}}
                                                    <div class="modal fade zoomIn" id="deleteRecordModal{{ $stock->id }}"
                                                        tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="{{route('deleteStock',['id'=>$stock->id])}}" method="get">
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
                                                                                 este producto ?</p>
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
                                                    <div class="modal fade" id="clientNewModal{{ $stock->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel"
                                                        aria-hidden="true">
                                                        <!-- .modal-dialog -->
                                                        <div class="modal-dialog" role="document">
                                                            <!-- .modal-content -->
                                                            <form action="{{ route('updateEvent', ['id' => $stock->id]) }}"
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
                                                                            <div class="col">
                                                                                    <label for="cnContactName">Nome do
                                                                                        Evento</label>
                                                                                    <input type="text" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Event_name"
                                                                                        value="{{ $stock->Event_name }}">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                    <label for="cnContactEmail">Data do
                                                                                        Evento</label>
                                                                                    <input type="date" id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Event_date"
                                                                                        value="{{ $stock->Event_date }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                    <label for="cnStreet">Horario do
                                                                                        Evento</label>
                                                                                    <input type="time"
                                                                                        id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Event_time"
                                                                                        value="{{ $stock->Event_time }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                    <label for="cnSuite">Integrantes
                                                                                        do Evento</label>
                                                                                    <input type="text"
                                                                                        id="cnContactName"
                                                                                        class="form-control"
                                                                                        name="Number_of_person"
                                                                                        value="{{ $stock->Number_of_person }}">
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $stock->id }}">
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
                            </div>
                            {{-- End of table section --}}

                        </div>
                    </div>

                    {{--Inicio da parte de adicao--}}
                    <div class="col-lg-4">
                        <div class="col">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Adicionar Entrada </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeStock')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label>Nome de Producto</label>
                                                <select class="form-control" name="Product_name">
                                                    <option>--Selecione o Producto --</option>
                                                    @foreach ($stocks as $product)
                                                    <option value="{{$product->productos->id}}">{{$product->productos->id}}</option>
                                                    @endforeach
                                                </select>   
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Quantidade</label> <input type="text"
                                                    class="form-control" id="input02" placeholder="Quantidade" name="Quantity" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Codigo de Barro</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Codigo de Barra" name="Barcode" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input02">Preco do Producto</label> <input type="text"
                                                    class="form-control" id="input02" placeholder="Preco do Producto"  name="Price" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Data de Entrada</label> <input type="date"
                                                    class="form-control" id="input01" name="Entry_date" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Data de Validade</label> <input type="date"
                                                    class="form-control" id="input01" name="Expiry_date" required="">
                                            </div><!-- /form column -->
                                            <div class="col-md-12 mb-3">
                                                <label for="input01">Numero de Factura</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Numero de Factura" name="Invoice_number" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Entrada</button>
                                        <a href="{{route('allStock')}}" type="button" class="btn btn-light" data-dismiss="modal">Voltar</a>
                                    </form><!-- /form -->
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>
                    {{---Fim do formulario de adicao--}}
                </div>
            </div>
    </main>
@endsection
