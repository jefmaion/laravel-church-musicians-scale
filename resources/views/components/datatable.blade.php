<div>
    <table class="mt-3 table table-striped datatable">

        <thead class="bg-light">
            <tr>
                @foreach($params['header'] as $label => $name)
                    <th>{{ $label }}</th>
                @endforeach
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($params['data'] as  $item)
            
            <tr>
                @foreach($params['header'] as $label => $name)
                    <td>{{ $item->{$name} }}</td>
                @endforeach

                          
                <td>
                    <div class="dropdown">

                        <a href="#" class="text-secondary" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">

                            <h6 class="dropdown-header text-left">Ações</h6>

                            {{-- <a href="{{ route($params['route'] . '.show', $item) }}" class="dropdown-item">
                                <i class="fa fa-eye" aria-hidden="true"></i> Ver
                            </a> --}}

                            {{-- <a href="{{ route($params['route'] . '.edit', $item) }}" class="dropdown-item">
                                <i class="fas fa-edit    "></i> Editar
                            </a>

                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-delete-">
                                <i class="fas fa-trash-alt    "></i> Excluir
                            </a> --}}

                            

                        </div>

                    </div>

                    {{-- <div class="modal" id="modal-delete-" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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

                                    <form action="{{ route($params['route'] . '.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt    "></i> Excluir
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>