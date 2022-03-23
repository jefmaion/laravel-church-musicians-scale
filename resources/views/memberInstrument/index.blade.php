@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"><i class="fa fa-users" aria-hidden="true"></i> Instrumentos de <b>{{ $member->name }} </b> </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('member.index') }}">Membros</a></li>
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
                    {{-- <a class="btn btn-success" href="{{ route('member.instrument.create', $member) }}" role="button">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Novo Instrumento
                    </a> --}}

                    <a class="btn btn-success" href="#" role="button" onclick="showFormModal('{{ route('member.instrument.create', $member) }}', 'Novo Instrum', 'modal-lg')">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Novo Membro
                    </a>
                </div>
                <div class="col">
                    <div class="form-group">
                      <input type="text" class="form-control datatable-search" name="" id="" aria-describedby="helpId" placeholder="Pesquisar">
                    </div>
                </div>
            </div>

            {{-- <x-datatable :params="$data"  /> --}}
            <table class="mt-3 table table-striped datatable">

                <thead class="bg-light">
                    <tr>
                        <th>Instrumento</th>
                        <th>Nível</th>
                        <th>Observação</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach($instruments as  $item)
  
                    <tr>
                      
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->pivot->level->name }}</td>
                        <td>{{ $item->pivot->comments }}</td>
                           
                        <td class="text-center">
                            <div class="dropdown">
        
                                <a href="#" class="text-secondary" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
        
                                    <h6 class="dropdown-header text-left">Ações</h6>
{{--         
                                    <a href="{{ route('member.instrument.edit', [$member, $item]) }}" class="dropdown-item">
                                        <i class="fas fa-edit"></i> Editar
                                    </a> --}}
                                    <a href="#" onclick="showFormModal('{{ route('member.instrument.edit', [$member, $item]) }}', 'Editar')" class="dropdown-item">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>

                                    
        
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-delete-">
                                        <i class="fas fa-trash-alt"></i> Excluir
                                    </a>
        
                                </div>
        
                            </div>

                            <x-modal-delete :route="route('member.instrument.destroy', [$member, $item])"  />
              
                        </td>
                    </tr>
                    @endforeach
        
                </tbody>
            </table>

        </div>
    </div>


    <x-modal-form   />

@stop

@section('plugins.Datatables', true)

@section('css')
   <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@stop



@section('js')
    <script src="{{ asset('js/datatable.js') }}"></script>
@stop