<div>
     <!-- Modal -->
     <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">

                <div class="modal-header bg-light">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                </div>
                
                <div class="modal-footer">

                    <button type="button" id="modal-submit-button" class="btn btn-success" onclick="modalSubmit()"> 
                        <i class="fa fa-check-circle" aria-hidden="true"></i> Salvar
                    </button>
                    
                    <a class="btn btn-secondary"data-dismiss="modal" role="button">
                        <i class="fa fa-ban" aria-hidden="true"></i> Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
    <script src="{{ asset('js/modal.js') }}"></script>
@stop