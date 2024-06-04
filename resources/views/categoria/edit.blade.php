<div class="modal fade" id="modalEditarCategoria" tabindex="-1" aria-labelledby="modalEditarCategoriaLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalEditarCategoriaLabel">Editar Categoria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="formEditarCategoria" method="GET" action="">
               @csrf
               @method('PUT')

               <input type="hidden" id="CategoriaId" name="CategoriaId" value="">

               <div class="mb-3">
                  <label for="descricao" class="form-label">Descricao</label>
                  <input type="text" class="form-control" id="descricaoEditar" name="descricao" placeholder="Descrição da categoria" value="">
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