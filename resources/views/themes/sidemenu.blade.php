<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         <a class="nav-link collapsed" href="index.html">
            <i class="bi bi-grid"></i>
            <span>Inicio</span>
         </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cash-stack"></i><span>Caixa</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{ route('venda.lista') }}">
                  <i class="bi bi-circle"></i><span>Controle de vendas</span>
               </a>
            </li>
         </ul>
      </li>

      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box-seam"></i><span>Estoque</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{ route('produtos.lista') }}">
                  <i class="bi bi-circle"></i><span>Produtos</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>Fornecedores</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{ route('fornecedores.lista') }}">
                  <i class="bi bi-circle"></i><span>Fornecedores</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>Cliente</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{ route('cliente.lista') }}">
                  <i class="bi bi-circle"></i><span>Cliente</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>Vendedor</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{ route('vendedor.lista') }}">
                  <i class="bi bi-circle"></i><span>Vendedor</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layers-half"></i><span>Categoria</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{ route('categoria.lista') }}">
                  <i class="bi bi-circle"></i><span>Categoria</span>
               </a>
            </li>
         </ul>
      </li>
   </ul>
</aside><!-- End Sidebar-->