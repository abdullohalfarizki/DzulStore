<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview menu-open">
                <a href="." class="nav-link <?= ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light bg-navy' : 'link-dark'; ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a href="Produk" class="nav-link <?= ((isset($_GET['x']) && $_GET['x'] == 'Produk')) ? 'active link-light bg-navy' : 'link-dark'; ?>">
                    <i class="nav-icon fas fa-barcode"></i>
                    <p>
                        Produk
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a href="KategoriProduk" class="nav-link <?= ((isset($_GET['x']) && $_GET['x'] == 'KategoriProduk')) ? 'active link-light bg-navy' : 'link-dark'; ?>">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Kategori Produk
                    </p>
                </a>
            </li>


            <li class="nav-item has-treeview menu-open">
                <a href="Pembelian" class="nav-link <?= ((isset($_GET['x']) && $_GET['x'] == 'Pembelian')) ? 'active link-light bg-navy' : 'link-dark'; ?>">
                    <i class="nav-icon fas fa-inbox"></i>
                    <p>
                        Pembelian
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a href="Pelanggan" class="nav-link <?= ((isset($_GET['x']) && $_GET['x'] == 'Pelanggan')) ? 'active link-light bg-navy' : 'link-dark'; ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Pelanggan
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>