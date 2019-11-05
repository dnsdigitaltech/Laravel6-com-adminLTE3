<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('corporativo') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>INDEX</p>
            </a>
        </li>
        <li class="nav-item has-treeview {{ Request::is('corporativo/leilao/consulta-veiculos') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('corporativo/leilao/consulta-veiculos') ? 'active' : '' }}">
                <i class="fas fa-gavel"></i>
                <p>Página 1 <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#"
                    class="nav-link {{ Request::is('corporativo/leilao/consulta-veiculos') ? 'active' : '' }}">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-car-alt"></i>
                        <p> Conteudo Pagina 1</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
