@extends('Layout.top')
@section('content')

    {{--Inicio do perfil do usuario--}}

    @role('admin') 
    
    @endrole

    @role('attendant')

    @endrole

    @role('stock_manager')

    @endrole

    @role('accountant')

    @endrole

    {{--Fim do perfil do usuario--}}

@endsection