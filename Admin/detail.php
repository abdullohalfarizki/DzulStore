<?php
$ambil = $conn->query("SELECT * FROM pembelian JOIN pelanggan 
    ON pembelian.id_pelanggan = pelanggan.id_pelanggan
    WHERE pembelian.id_pembelian = '$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<!-- <pre><?php print_r($detail) ?></pre> -->

<p><?php echo $detail['nama_pelanggan']; ?></p>

<p>Telpon : <?php echo $detail['telp_pelanggan']; ?><br>
    Email : <?php echo $detail['email_pelanggan']; ?></br>

<p>Tanggal : <?php echo $detail['tgl_pembelian']; ?><br>
    Total : <?php echo $detail['total_pembelian']; ?>
</p>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Data Pembelian</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:400;">
                        <?php
                        $no = 1;
                        $ambil = $conn->query("SELECT * FROM pembelian_produk 
                        JOIN produk ON pembelian_produk.id_produk = produk.id_produk
                        WHERE pembelian_produk.id_pembelian = '$_GET[id]' ");
                        while ($data =  mysqli_fetch_assoc($ambil)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_produk'] ?></td>
                                <td>Rp. <?php echo number_format($data['harga_produk']) ?></td>
                                <td> <?php echo $data['jumlah']; ?></td>
                                <td>Rp. <?php echo number_format($data['harga_produk'] * $data['jumlah']) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->