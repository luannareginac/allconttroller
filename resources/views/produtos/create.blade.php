<!-- Modal Novo Produto -->
<div class="modal fade" id="modalNovoProduto" tabindex="-1" aria-labelledby="modalNovoProdutoLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalNovoProdutoLabel">Adicionar Novo Produto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="formProduto" method="POST" action="{{ route('produto.salvar') }}">
               <input type="hidden" id="produtoId" name="produtoId" value="">

               @csrf

               <div class="mb-3">
                  <label for="descricao" class="form-label">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descricao do produto">
               </div>
               <div class="mb-3">
                  <label for="CodigoProduto" class="form-label">Código do Produto</label>
                  <div class="input-group">
                     <input type="text" class="form-control" id="CodigoProduto" name="CodigoProduto" placeholder="Digite ou gere o código do produto" readonly>
                     <button type="button" class="btn btn-secondary" onclick="generateProductCode()">Gerar</button>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="DataCompra" class="form-label">Data de Compra</label>
                  <input type="date" class="form-control" id="DataCompra" name="DataCompra">
               </div>
               <div class="mb-3">
                  <label for="categoria" class="form-label">Categoria:</label>
                  <select class="form-select" id="categoria" name="categoria">
                     <option value="">Selecione uma categoria</option>
                     @foreach($categorias as $categoria)
                     <option value="{{ $categoria->idcategoriaprodutos }}">{{ $categoria->descricao }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="mb-3">
                  <label for="unidade" class="form-label">Unidade Medida:</label>
                  <select class="form-select" id="unidade" name="unidade">
                     <option value="">Selecione uma unidade de medida</option>
                     @foreach($unidadesDeMedida as $unidade)
                     <option value="{{ $unidade->idunidademedida }}">{{ $unidade->descricao }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="mb-3">
                  <label for="qtd" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" id="qtd" name="qtd" placeholder="qtd comprada">
               </div>

               <div class="mb-3">
                  <label for="valor" class="form-label">Preço unitário</label>
                  <input type="number" class="form-control" id="valor" name="valor" placeholder="R$" onchange="calculatePrice()" step="any">
               </div>
               <div class="mb-3">
                  <label for="porcentagem_ganho" class="form-label">Porcentagem de ganho</label>
                  <input type="number" class="form-control" id="porcentagem_ganho" name="porcentagem_ganho" placeholder="%" onchange="calculatePrice()">
               </div>
               <div class="mb-3">
                  <label for="valor_venda" class="form-label">Preço venda</label>
                  <input type="number" class="form-control" id="valor_venda" name="valor_venda" placeholder="R$" readonly>
               </div>

               <div class="mb-3">
                  <label for="fornecedor" class="form-label">Fornecedor:</label>
                  <select class="form-select" id="fornecedor" name="fornecedor">
                     <option value="">Selecione um Fornecedor</option>
                     @foreach($fornecedor as $fornecedores)
                     <option value="{{ $fornecedores->idfornecedor }}">{{ $fornecedores->nome }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="mb-3">
                  <label for="CodigoBarras" class="form-label">Código de barras</label>
                  <input type="text" class="form-control" id="CodigoBarras" name="CodigoBarras" placeholder="Digite o código de barras">
               </div>
               <div class="mb-3">
                  <label for="Observacao" class="form-label">Observacao</label>
                  <input type="text" class="form-control" id="Observacao" name="Observacao" placeholder="Escreva alguma obs.">
               </div>
               <div class="mb-3">
                  <label for="valortotalcompra" class="form-label">Valor total:</label>
                  <div class="input-group">
                     <input type="text" class="form-control" id="valortotalcompra" name="valortotalcompra" placeholder="Calcule o valor total da compra" readonly>
                     <button type="button" class="btn btn-secondary" onclick="CalculateValueTotal()">Calcular</button>
                  </div>
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

<script>
   function calculatePrice() {
      var precoUnitario = parseFloat(document.getElementById('valor').value);
      var porcentagemGanho = parseFloat(document.getElementById('porcentagem_ganho').value);

      if (!isNaN(precoUnitario) && !isNaN(porcentagemGanho)) {
         var precoVenda = precoUnitario + (precoUnitario * (porcentagemGanho / 100));
         document.getElementById('valor_venda').value = precoVenda.toFixed(2);
      }
   }
</script>
<script>
   function generateProductCode() {
      var codigo = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
      document.getElementById('CodigoProduto').value = codigo;
   }
</script>
<script>
   function CalculateValueTotal() {
      var precoUnitario = parseFloat(document.getElementById('valor').value);
      var quantidade = parseInt(document.getElementById('qtd').value);
      var valorTotal = precoUnitario * quantidade;

      document.getElementById('valortotalcompra').value = valorTotal.toFixed(2);
   }
</script>