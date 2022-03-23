<form id="form" method="POST" action="{{ route('member.store') }}">
    @include('member.form')
</form>

{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">
                <i class="fa fa-user-plus" aria-hidden="true"></i> Novo Membro
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Membros</a></li>
                <li class="breadcrumb-item active">Novo</li>
            </ol>
        </div>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-12 offsest-md-3">
            <div class="card">
                <div class="card-body">
                    <form id="form" method="POST" action="{{ route('member.store') }}">
                        @include('member.form')
                        @include('fragments.form-buttons')
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}