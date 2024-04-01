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
                                <h6 class="card-header"> Adicionar Usuarios </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeUser')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Nome</label> <input type="text"
                                                    class="form-control" id="input01" value="Beni" name="name" required="">
                                            </div><!-- /form column -->
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Apelido</label> <input type="text"
                                                    class="form-control" id="input02" value="Arisandi" name="Surname" required="">
                                            </div><!-- /form column -->
                                        </div><!-- /form row -->
                                        {{--Inicio do input type select--}}
                                        <div class="form-group">
                                            <label>Tipo de Usuario</label>
                                            <select class="form-control" name="User_type">
                                                <option value="Attendant">Atendente</option>
                                                <option value="Stock_manager">Gestor de Stock</option>
                                                <option value="Accountant">Contabilista</option>
                                            </select>
                                        </div>
                                        {{--Fim do input type select--}}
                                        <!-- .form-group -->
                                        <div class="form-group">
                                            <label for="input03">Email</label> <input type="email" class="form-control"
                                                id="input03" value="bent10@looper.com" name="email" required="">
                                        </div><!-- /.form-group -->
                                        <!-- .form-group -->
                                        <div class="form-group">
                                            <label for="input04">Senha</label> <input type="password"
                                                class="form-control" id="input04" value="secret" name="password" required="">
                                        </div><!-- /.form-group -->
                                        <hr>
                                        <!-- .form-actions -->
                                        <div class="form-actions">
                                            
                                            <!-- enable submit btn when user type their current password -->
                                            <input type="password" class="form-control mr-3" id="input06"
                                                placeholder="Digite novamente a senha" name="password_confirmation" required=""> <button type="submit"
                                               name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Usuario</button>
                                        </div><!-- /.form-actions -->
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
