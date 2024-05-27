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
                                <h6 class="card-header"> Adicionar Produto </h6><!-- .card-body -->
                                <div class="card-body">
                                    <!-- form -->
                                    <form method="post" action="{{route('storeProduct')}}">
                                        @csrf
                                        <!-- form row -->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Nome do Produto</label>
                                                <input type="text" class="form-control @error('Product_name') is-invalid @enderror" id="input01" placeholder="Nome do Produto" name="Product_name" value="{{ old('Product_name') }}" required>
                                                @error('Product_name')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Quantidade</label>
                                                <input type="number" class="form-control @error('Quantity') is-invalid @enderror" id="input02" placeholder="Quantidade" name="Quantity" value="{{ old('Quantity') }}" required>
                                                @error('Quantity')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Código de Barra</label>
                                                <input type="text" class="form-control @error('Code') is-invalid @enderror" id="input01" placeholder="Código de Barra" name="Code" value="{{ old('Code') }}" required>
                                                @error('Code')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Preço do Produto</label>
                                                <input type="number" step="0.01" class="form-control @error('Price') is-invalid @enderror" id="input02" placeholder="Preço do Produto" name="Price" value="{{ old('Price') }}" required>
                                                @error('Price')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Data de Entrada</label>
                                                <input type="date" class="form-control @error('Entry_date') is-invalid @enderror" id="input01" name="Entry_date" value="{{ old('Entry_date') }}" required>
                                                @error('Entry_date')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input01">Data de Validade</label>
                                                <input type="date" class="form-control @error('Expiry_date') is-invalid @enderror" id="input01" name="Expiry_date" value="{{ old('Expiry_date') }}" required>
                                                @error('Expiry_date')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>Categorias</label>
                                                <select class="form-control @error('Id_category') is-invalid @enderror" name="Id_category" required>
                                                    <option value="">--Selecione a Categoria--</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ old('Id_category') == $category->id ? 'selected' : '' }}>{{ $category->Category_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('Id_category')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Preço de Venda</label>
                                                <input type="number" step="0.01" class="form-control @error('Sale_price') is-invalid @enderror" id="input02" placeholder="Preço de Venda" name="Sale_price" value="{{ old('Sale_price') }}" required>
                                                @error('Sale_price')
                                                    <div class="invalid-feedback">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary text-nowrap ml-auto">Adicionar Producto</button>
                                        <a href="{{route('allProduct')}}" type="button" class="btn btn-light" data-dismiss="modal">Voltar</a>
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
