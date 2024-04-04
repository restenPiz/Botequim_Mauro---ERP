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
                                <h6 class="card-header"> Adicionar Evento </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeEvent')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Nome do Evento</label> <input type="text"
                                                    class="form-control" id="input01" placeholder="Nome do evento" name="Event_name" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Data do Evento</label> <input type="date"
                                                    class="form-control" id="input02" value="Arisandi" name="Event_date" required="">
                                            </div><!-- /form column -->
                                        </div><!-- /form row -->
                                        {{--Inicio do input type select--}}
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Horario do Evento</label> <input type="time"
                                                    class="form-control" id="input01" placeholder="Nome do evento" name="Event_time" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Numero de Intervenientes</label> <input type="text"
                                                    class="form-control" id="input02"  name="Number_of_person" required="">
                                            </div><!-- /form column -->
                                        </div>
                                        <hr>
                                        <button type="submit"
                                               name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Usuario</button>
                                               <a href="{{route('allEvent')}}" type="button" class="btn btn-light"
                                                                            data-dismiss="modal">Voltar</a>
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
