<?php
if (isset($_GET['x']) && $_GET['x'] == 'Home') {
    $page = "Home.php";
    include "Main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Produk') {
    $page = "Produk.php";
    include "Main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'KategoriProduk') {
    $page = "KategoriProduk.php";
    include "Main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Pembelian') {
    $page = "Pembelian.php";
    include "Main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Pelanggan') {
    $page = "Pelanggan.php";
    include "Main.php";
} else {
    $page = "Home.php";
    include "Main.php";
}
