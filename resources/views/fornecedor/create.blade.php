<div class="modal fade" id="modalNovoFornecedor" tabindex="-1" aria-labelledby="modalNovoFornecedorLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalNovoFornecedorLabel">Adicionar Novo Fornecedor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="formFornecedor" method="POST" action="{{ route('fornecedores.salvar') }}">
               <input type="hidden" id="fornecedorId" name="fornecedorId" value="">

               @csrf

               <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="nome do Fornecedor">
               </div>
               <div class="mb-3">
                  <label for="endereco" class="form-label">endereco</label>
                  <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do fornecedor">
               </div>
               <div class="mb-3">
                  <label for="cidade" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade do fornecedor">
               </div>
               <div class="mb-3">
                  <label for="estado" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado do fornecedor">
               </div>
               <div class="mb-3">
                  <label for="cep" class="form-label">CEP</label>
                  <input type="number" class="form-control" id="cep" name="cep" placeholder="Estado do fornecedor">
               </div>
               <div class="mb-3">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="phone" class="form-control" id="telefone" name="telefone">
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email">
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