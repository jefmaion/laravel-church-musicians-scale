<form id="form" method="POST" action="{{ route('member.instrument.store', $member) }}">
    @include('memberInstrument.form')
    {{-- <button type="submit" class="btn btn-success"> 
        <i class="fa fa-check-circle" aria-hidden="true"></i> Salvar
    </button>
    
    <a class="btn btn-secondary" href="{{ route('member.instrument.index', $member) }}" role="button">
        <i class="fa fa-ban" aria-hidden="true"></i> Cancelar
    </a> --}}
</form>


{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">
                <i class="fa fa-user-plus" aria-hidden="true"></i> Novo Instrumento para {{ $member->name }}
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('member.index') }}">Membros</a></li>
                <li class="breadcrumb-item"><a href="{{ route('member.instrument.index', $member) }}">{{ $member->name }}</a></li>
                <li class="breadcrumb-item active">Novo Instrumento</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form id="form" method="POST" action="{{ route('member.instrument.store', $member) }}">
                @include('memberInstrument.form')
                <button type="submit" class="btn btn-success"> 
                    <i class="fa fa-check-circle" aria-hidden="true"></i> Salvar
                </button>
                
                <a class="btn btn-secondary" href="{{ route('member.instrument.index', $member) }}" role="button">
                    <i class="fa fa-ban" aria-hidden="true"></i> Cancelar
                </a>
            </form>


        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop --}}