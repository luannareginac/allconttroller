<div class="modal fade" id="modalNovaVenda" tabindex="-1" aria-labelledby="modalNovaVendaLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalNovaVendaLabel">Registrar nova venda</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form id="formVenda" method="POST" action="{{ route('venda.salvar') }}">
               <input type="hidden" id="vendaId" name="vendaId" value="">
               @csrf

               <div class="mb-3">
                  <label for="datavenda" class="form-label">Data Venda</label>
                  <input type="date" class="form-control" id="datavenda" name="datavenda" placeholder="Data da Venda">
               </div>
               <div class="mb-3">
                  <label for="codigoprodutovenda" class="form-label">Código do Produto</label>
                  <div class="input-group">
                     <input type="text" class="form-control" id="codigoprodutovenda" name="codigoprodutovenda" placeholder="Digite ou gere o código do produto">
                     <button type="button" class="btn btn-secondary" onclick="buscarcode()">Buscar Produto</button>
                  </div>
               </div>

               <div class="mb-3">
                  <label for="descricao" class="form-label">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do Produto" readonly>
               </div>
               <div class="mb-3">
                  <label for="vendedor" class="form-label">Vendedor:</label>
                  <select class="form-select" id="vendedor" name="vendedor">
                     <option value="">Selecione um Vendedor</option>
                     @foreach($vendedores as $vendedor)
                     <option value="{{ $vendedor->idvendedor }}">{{ $vendedor->nome }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="mb-3">
                  <label for="cliente" class="form-label">Cliente:</label>
                  <select class="form-select" id="cliente" name="cliente">
                     <option value="">Cliente</option>
                     @foreach($clientes as $cliente)
                     <option value="{{ $cliente->idcliente }}">{{ $cliente->nome }}</option>
                     @endforeach
                  </select>
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
   function buscarcode() {
      var codigoProduto = document.getElementById('codigoprodutovenda').value;

      $.ajax({
         url: '/buscarcode',
         type: 'GET',
         data: {
            codigoprodutovenda: codigoProduto
         },
         success: function(response) {
            document.getElementById('descricao').value = response.data.produto.Descricao;
         },
         error: function(xhr) {

            console.log(xhr.responseText);
         }
      });
   }
</script>