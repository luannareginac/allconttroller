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
         <h1>Detalhamento de vendas</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
               <li class="breadcrumb-item active">Vendas</li>
            </ol>
         </nav>
      </div><!-- End Page Title -->

   </main><!-- End #main -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="card-body d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Vendas Feitas</h5>
                  <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modalNovaVenda">
                     Registra nova
                  </button>
               </div>
               <table id="tabela-vendas" class="table">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Data Venda</th>
                        <th>Produto</th>
                        <th>Qtd.</th>
                        <th>Unidade</th>
                        <th>Vendedor</th>
                        <th>Cliente</th>
                        <th>Tipo pagamento</th>
                        <th>Valor total da venda</th>
                        <th>Ação</th>

                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($vendas as $venda)
                     <tr>
                        <td>#{{ $venda->idvendas }}</td>
                        <td>{{ $venda->DataVenda }}</td>
                        <td>{{ $venda->produto ? $venda->produto->descricao : 'Produto não associado' }}</td>
                        <td>{{ $venda->qtd }}</td>
                        <td>{{ $venda->unidadeMedida ? $venda->unidadeMedida->descricao : 'Unidade não associada' }}</td>
                        <td>{{ $venda->vendedor ? $venda->vendedor->nome : 'Vendedor não associado' }}</td>
                        <td>{{ $venda->cliente ? $venda->cliente->nome : 'Cliente não associado' }}</td>
                        <td>{{ $venda->tipopag ? $venda->tipopag->nome : 'Tipo de pagamento não associado' }}</td>
                        <td>R$ {{ number_format($venda->TotalVenda, 2, ',', '.') }}</td>
                        <td>
                           <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                           <form method="POST" action="{{ route('venda.remover', $venda->idvendas) }}">
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

   @include('vendas.create')
   @include('vendas.edit')

   @include('themes.footer')

   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

   <script>
      $(document).ready(function() {
         $('#tabela-vendas').DataTable();
      });
   </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>