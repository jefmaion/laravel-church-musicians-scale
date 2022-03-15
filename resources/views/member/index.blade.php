@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
       <i class="fa fa-users" aria-hidden="true"></i> Membros
    </h1>
@stop

@section('content')
   
    <div class="card">
        <div class="card-body">

            <a class="btn btn-success" href="#" role="button">
                <i class="fa fa-user-plus" aria-hidden="true"></i> Novo Membro
            </a>

            <div class="mt-3">

                <x-datatable :params="$datatable"  />
            </div>

        </div>
    </div>

@stop

@section('css')
   
@stop

@section('plugins.Datatables', true)

@section('js')
    <script src="{{ asset('js/datatable.js') }}"></script>
@stop