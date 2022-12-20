<h3>Pembelian</h3>
<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pembelian</h3>

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
                            <th>Nama Pelangan</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:400;">
                        <?php
                        $no = 1;
                        $ambil = $conn->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pembelian = pelanggan.id_pelanggan ");
                        while ($data = mysqli_fetch_assoc($ambil)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_pelanggan'] ?></td>
                                <td><?php echo $data['tgl_pembelian'] ?></td>
                                <td>Rp. <?php echo number_format($data['total_pembelian']) ?></td>
                                <td class="text-center">

                                    <a href="index.php?halaman=detail&id=<?php echo $data['id_pembelian'] ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                </td>
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