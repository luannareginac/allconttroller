<!-- Modal Editar Produto -->
<div class="modal fade" id="modalEditarProduto" tabindex="-1" aria-labelledby="modalEditarProdutoLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalEditarProdutoLabel">Editar Produto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- Formulário de Edição de Produto -->
            <form id="formEditarProduto" method="GET" action="{{ route('produto.editar', ['id' => $produto->idprodutosentrada]) }}">
               @csrf
               @method('PUT')

               <input type="hidden" id="produtoId" name="produtoId" value="">

               <div class="mb-3">
                  <label for="descricao" class="form-label">Descrição</label>
                  <input type="text" class="form-control" id="descricaoEditar" name="descricao" placeholder="Descrição do produto" value="{{ $produto->descricao }}">
               </div>

               <!-- Outros campos para edição do produto -->

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