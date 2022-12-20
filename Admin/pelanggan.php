<h3>Pelanggan</h3>
<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pelanggan</h3>

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
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:400;">
                        <?php
                        $no = 1;
                        $ambil = $conn->query("SELECT * FROM pelanggan");
                        while ($data = mysqli_fetch_assoc($ambil)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_pelanggan'] ?></td>
                                <td>Rp. <?php echo $data['jk'] ?></td>
                                <td><?php echo $data['email_pelanggan'] ?></td>
                                <td><?php echo $data['telp_pelanggan'] ?></td>
                                <td><?php echo $data['alamat_pelanggan'] ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
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