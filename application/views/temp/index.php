<!-- Begin Page Content -->
<div class="container-fluid">
<h5>Riwayat Pemesanan</h5>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Destinasi</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tahun posting</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Jumalh Tiket</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col" width="10%">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($temp as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['email_user']; ?></td>
                        <td><?= $b['judul_buku']; ?></td>
                        <td><?= $b['penulis']; ?></td>
                        <td><?= $b['penerbit']; ?></td>
                        <td><?= $b['tahun_terbit']; ?></td>
                        <td><?= $b['harga_buku']; ?></td>
                        <td><?= $b['tiket']; ?></td>
                        <td><?= $b['total_harga']; ?></td>
                        <td>
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/upload/') . $b['image'];?>" class="img-fluid img-thumbnail" alt="...">
                            </picture>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->