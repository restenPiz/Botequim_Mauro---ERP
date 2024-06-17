@extends('Layout.top')
@section('content')
    {{-- Inicio do perfil do usuario --}}

    @role('admin')
        <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->
                <div class="page">
                    <div class="page-inner">
                        <div class="page-section">
                            <!-- grid row -->
                            <div class="row">
                                <!-- grid column -->
                                <div class="col-lg-4">
                                    <!-- .card -->
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Seus Detalhes </h6><!-- .nav -->
                                        <nav class="nav nav-tabs flex-column border-0">
                                            <a href="" class="nav-link active">Perfil</a> 
                                        </nav><!-- /.nav -->
                                    </div><!-- /.card -->
                                </div><!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-lg-8">
                                    <!-- .card -->
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Perfil do Usuario </h6><!-- .card-body -->
                                        <div class="card-body">
                                            <!-- .media -->
                                            <div class="media mb-3">
                                                <!-- avatar -->
                                                <div class="user-avatar user-avatar-xl fileinput-button">
                                                    <div class="fileinput-button-label"> </div><img
                                                        src="../assets/dif.jpg" alt=""> <input
                                                        id="fileupload-avatar" type="file" name="avatar">
                                                </div><!-- /avatar -->
                                                <!-- .media-body -->
                                                <div class="media-body pl-3">
                                                    <h3 class="card-title"> {{Auth::user()->name}} </h3>
                                                    <h6 class="card-subtitle text-muted"> {{Auth::user()->email}} </h6>
                                                    <div id="progress-avatar" class="progress progress-xs fade">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                            role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><!-- /avatar upload progress bar -->
                                                </div><!-- /.media-body -->
                                            </div><!-- /.media -->
                                            <!-- form -->
                                            <form method="post" action="{{route('storeProfile',[
                                                'id'=>Auth::user()->id
                                            ])}}">
                                                @csrf
                                                <!-- form row -->
                                                <div class="form-row">
                                                    <!-- form column -->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="input01">Nome</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" id="input01" placeholder="Digite o seu nome" name="name">
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div><!-- /form column -->
                                                </div><!-- /form row -->
                                                <div class="form-row">
                                                    <!-- form column -->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="input02">Apelido</label>
                                                        <input type="text" class="form-control @error('Surname') is-invalid @enderror" value="{{ Auth::user()->Surname }}" id="input02" placeholder="Digite o seu apelido" name="Surname">
                                                        @error('Surname')
                                                            <div class="invalid-feedback">
                                                                <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div><!-- /form column -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="input03">Email</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" id="input03" placeholder="Ex: contacto@mauropeniel.info" name="email" >
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div><!-- /.form-group -->
                                                <!-- .form-group -->
                                                <div class="form-group">
                                                    <label for="input04">Senha</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="input04" placeholder="Digite a sua senha" name="password">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div><!-- /.form-group -->
                                            
                                                <!-- .form-actions -->
                                                <div class="form-group">
                                                    <label for="input05">Senha de Confirmação</label>
                                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" id="input05" placeholder="Digite novamente a sua senha" name="password_confirmation">
                                                    @error('password_confirmation')
                                                        <div class="invalid-feedback">
                                                            <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div><!-- /.form-group -->
                                            
                                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                                <input type="hidden" name="user_type" value="Admin">
                                                
                                                <hr>
                                                <!-- .form-actions -->
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Actualizar Perfil</button>
                                                </div><!-- /.form-actions -->
                                            </form><!-- /form -->
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endrole

    @role('attendant')
    @endrole

    @role('stock_manager')
    @endrole

    @role('accountant')
    @endrole

    {{-- Fim do perfil do usuario --}}
@endsection
