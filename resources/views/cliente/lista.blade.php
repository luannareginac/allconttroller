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
         <h1>Listagem de Clientes</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
               <li class="breadcrumb-item active">Clientes</li>
            </ol>
         </nav>
      </div><!-- End Page Title -->

   </main><!-- End #main -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="card-body d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Clientes</h5>
                  <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modalNovoCliente">
                     Adicionar novo
                  </button>
               </div>
               <table id="tabela-Cliente" class="table">
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
                     @foreach ($clientes as $cliente)
                     <tr>
                        <td>#{{ $cliente->idcliente}}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->cidade }}</td>
                        <td>{{ $cliente->estado }}</td>
                        <td>{{ $cliente->cep }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>
                           <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                           <form method="POST" action="{{ route('cliente.remover', $cliente->idcliente) }}">
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

   @include('cliente.create')
   @include('cliente.edit')

   <!-- ======= Footer ======= -->
   @include('themes.footer')
   <!-- End Footer -->

   <!-- Include DataTables JavaScript -->
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

   <!-- Initialize DataTables -->
   <script>
      $(document).ready(function() {
         $('#tabela-cliente').DataTable();
      });
   </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>