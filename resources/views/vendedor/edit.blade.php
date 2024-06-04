<div class="modal fade" id="modalEditarVendedor" tabindex="-1" aria-labelledby="modalEditarVendedorLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalEditarVendedorLabel">Editar Vendedor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="formEditarVendedor" method="GET" action="">
               @csrf
               @method('PUT')

               <input type="hidden" id="VendedorId" name="VendedorId" value="">

               <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nomeEditar" name="nome" placeholder="nome do vendedor" value="">
               </div>


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