<div>
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

                    <form action="{{ $route }}" method="POST">
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
</div>