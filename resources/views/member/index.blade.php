@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"><i class="fa fa-users" aria-hidden="true"></i> Membros</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Membros</li>
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
                    <a class="btn btn-success" href="{{ route('member.create') }}" role="button">
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
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach($members as  $item)
                    
                    <tr>
                      
                        <td>{{ $item->name }} ({{ $item->nickname }})</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if($item->enabled == 1)
                                <span class="badge badge-pill badge-success">Ativo</span>
                            @else
                                <span class="badge badge-pill badge-secondary">Inativo</span>
                            @endif
                        </td>
                                  
                        <td class="text-center">
                            <div class="dropdown">
        
                                <a href="#" class="text-secondary" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
        
                                    <h6 class="dropdown-header text-left">Ações</h6>
        
                                    <a href="{{ route('member.show', $item) }}" class="dropdown-item">
                                        <i class="fa fa-eye" aria-hidden="true"></i> Ver
                                    </a>
        
                                    <a href="{{ route('member.edit', $item) }}" class="dropdown-item">
                                        <i class="fas fa-edit    "></i> Editar
                                    </a>
        
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-delete-">
                                        <i class="fas fa-trash-alt    "></i> Excluir
                                    </a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('member.instrument.index', $item) }}" class="dropdown-item">
                                        <i class="fa fa-guitar" aria-hidden="true"></i> Instrumentos
                                    </a>
        
                                </div>
        
                            </div>
        
                            <div class="modal" id="modal-delete-" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
        
                                            <p class="modal-title sfont-weight-bold">
                                                <i class="fas fa-trash-alt    "></i> Exclusão
                                            </p>
        
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="text-center">Deseja excluir esse registro?</h5>
                                        </div>
                                        <div class="modal-footer">
        
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                <i class="fas fa-ban    "></i> Cancelar
                                            </button>
        
                                            <form action="{{ route('member.destroy', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt    "></i> Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </td>
                    </tr>
                    @endforeach
        
                </tbody>
            </table>

        </div>
    </div>

@stop

@section('plugins.Datatables', true)

@section('css')
   <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@stop



@section('js')
    <script src="{{ asset('js/datatable.js') }}"></script>
@stop