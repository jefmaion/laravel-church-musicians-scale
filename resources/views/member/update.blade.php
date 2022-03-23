
 <form id="form" method="POST" action="{{ route('member.update', $member) }}">
    @method('PUT')
    @include('member.form')
    {{-- @include('fragments.form-buttons') --}}
</form>


{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Editar Membro - <span class="text-muted"><small>{{ $member->name }}</small></span>
        </h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Membros</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>
    </div>
</div>
<h1>
    
</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form id="form" method="POST" action="{{ route('member.update', $member) }}">
                @method('PUT')
                @include('member.form')
                @include('fragments.form-buttons')
            </form>

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
 
@stop --}}