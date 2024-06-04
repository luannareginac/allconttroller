<!-- Modal Editar cliente -->
<div class="modal fade" id="modalEditarCliente" tabindex="-1" aria-labelledby="modalEditarClienteLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalEditarClienteLabel">Editar Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- Formulário de Edição de cliente -->
            <form id="formEditarFCliente" method="GET" action="">
               @csrf
               @method('PUT')

               <input type="hidden" id="ClienteId" name="ClienteId" value="">

               <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="descricaoEditar" name="nome" placeholder="Descrição do Cliente" value="">
               </div>

               <!-- Outros campos para edição do cliente -->

               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Salvar Alterações</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>