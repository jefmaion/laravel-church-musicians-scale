@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-guitar" aria-hidden="true"></i> Instrumentos</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Instrumentos</li>
            </ol>
        </div>
    </div>
</div>

@stop

@section('content')
   
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col">
                    <a class="btn btn-success" href="{{ route('instrument.create') }}" role="button">
                        <i class="fas fa-guitar" aria-hidden="true"></i> Novo Instrumento
                    </a>
                </div>
                <div class="col">
                    <div class="form-group">
                      <input type="text" class="form-control datatable-search" name="" id="" aria-describedby="helpId" placeholder="Pesquisar">
                    </div>
                </div>
            </div>

            <x-datatable :params="$data"  />

        </div>
    </div>

@stop

