@include('themes.head')

<body>

   <!-- ======= Header ======= -->
   @include('themes.header')
   <!-- End Header -->

   <!-- ======= Sidebar ======= -->
   @include('themes.sidemenu')
   <!-- End Sidebar-->

   <main id="main" class="main">

      <div class="pagetitle">
         <h1>Listagem de Produtos</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
               <li class="breadcrumb-item active">Estoque</li>
            </ol>
         </nav>
      </div><!-- End Page Title -->

   </main><!-- End #main -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="card-body d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Produtos comprados</h5>
                  <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modalNovoProduto">
                     Adicionar novo
                  </button>
               </div>
               <table id="tabela-produtos" class="table">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Descrição</th>
                        <th>Data de Compra</th>
                        <th>Valor Unitário</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th>Unidade</th>
                        <th>Fornecedor</th>
                        <th>(%)</th>
                        <th>Valor para venda</th>
                        <th>Valor Gasto</th>
                        <th>Ação</th>

                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($produtos as $produto)
                     <tr>
                        <td>#{{ $produto->idprodutosentrada }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->DataCompra }}</td>
                        <td>R$ {{ number_format($produto->valor, 2, ',', '.') }}</td>
                        <td>{{ $produto->qtd }}</td>
                        <td>{{ $produto->categoria->descricao }}</td>
                        <td>{{ $produto->unidadeMedida->descricao }}</td>
                        <td>{{ $produto->fornecedor->nome }}</td>
                        <td>{{ $produto->porcentagem_ganho }}</td>
                        <td>R$ {{ number_format($produto->valor_venda, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($produto->valortotalcompra, 2, ',', '.') }}</td>
                        <td>
                           <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                           <form method="POST" action="{{ route('produto.remover', $produto->idprodutosentrada) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                           </form>
                        </td>

                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   @include('produtos.create')
   @include('produtos.edit')

   <!-- ======= Footer ======= -->
   @include('themes.footer')
   <!-- End Footer -->

   <!-- Include DataTables JavaScript -->
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

   <!-- Initialize DataTables -->
   <script>
      $(document).ready(function() {
         $('#tabela-produtos').DataTable();
      });
   </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>