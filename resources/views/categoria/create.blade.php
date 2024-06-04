<div class="modal fade" id="modalNovaCategoria" tabindex="-1" aria-labelledby="modalNovaCategoriaLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalNovaCategoriaLabel">Adicionar Nova categoria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="formCategoria" method="POST" action="{{ route('categoria.salvar') }}">
               <input type="hidden" id="CategoriaId" name="CategoriaId" value="">

               @csrf

               <div class="mb-3">
                  <label for="descricao" class="form-label">Descricao</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="nome da categoria">
               </div>

               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Salvar</button>
               </div>

            </form>
         </div>

      </div>
   </div>
</div>