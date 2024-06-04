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
         <h1>Listagem de Vendedores</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
               <li class="breadcrumb-item active">Vendedores</li>
            </ol>
         </nav>
      </div><!-- End Page Title -->

   </main><!-- End #main -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="card-body d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Vendedores</h5>
                  <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modalNovoVendedor">
                     Adicionar novo
                  </button>
               </div>
               <table id="tabela-vendedor" class="table">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>telefone</th>
                        <th>Email</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>Ação</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($vendedores as $vendedor)
                     <tr>
                        <td>#{{ $vendedor->idvendedor}}</td>
                        <td>{{ $vendedor->nome }}</td>
                        <td>{{ $vendedor->endereco }}</td>
                        <td>{{ $vendedor->cidade }}</td>
                        <td>{{ $vendedor->estado }}</td>
                        <td>{{ $vendedor->cep }}</td>
                        <td>{{ $vendedor->telefone }}</td>
                        <td>{{ $vendedor->email }}</td>
                        <td>
                           <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                           <form method="POST" action="{{ route('vendedor.remover', $vendedor->idvendedor) }}">
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

   @include('vendedor.create')
   @include('vendedor.edit')

   <!-- ======= Footer ======= -->
   @include('themes.footer')
   <!-- End Footer -->

   <!-- Include DataTables JavaScript -->
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

   <!-- Initialize DataTables -->
   <script>
      $(document).ready(function() {
         $('#tabela-vendedor').DataTable();
      });
   </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>