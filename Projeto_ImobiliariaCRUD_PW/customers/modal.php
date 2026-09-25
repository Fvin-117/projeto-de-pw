<!-- Modal de Delete -->
<div class="modal fade re-modal" id="delete-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Excluir item</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <div class="modal-body d-flex align-items-center gap-3 py-4">
                <i class="fa-solid fa-triangle-exclamation fs-2" style="color: var(--re-brass);"></i>
                <span>Deseja realmente excluir este item? Essa ação não pode ser desfeita.</span>
            </div>
            <div class="modal-footer">
                <a id="cancel" class="btn btn-re-outline" data-bs-dismiss="modal" role="button">
                    <i class="fa-solid fa-circle-xmark me-1"></i> Não
                </a>
                <a id="confirm" class="btn btn-danger" href="#">
                    <i class="fa-solid fa-circle-check me-1"></i> Sim, excluir
                </a>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->