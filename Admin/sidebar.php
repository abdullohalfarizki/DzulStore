<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="../Template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="." class="d-block">Dzul Abdull</a>
        </div>
    </div>

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
            <li class="nav-item has-treeview menu-open">
                <a href="logout" class="nav-link <?= ((isset($_GET['x']) && $_GET['x'] == 'logout')) ? 'active link-light bg-navy' : 'link-dark'; ?>">
                    <i class="nav-icon fas fa-sign"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>