<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- row ux-->
   
    <!-- end row ux-->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- row table-->
    <div class="row">
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Data
                    Pengguna</span>
                <a class="text-danger" href=""><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td><?= $a['role_id']; ?></td>
                        <td><?= $a['is_active']; ?></td>
                        <td><?= date('Y', $a['tanggal_input']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Data
                    Pengguna</span>
                <a class="text-danger" href=""><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($member as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td><?= $a['role_id']; ?></td>
                        <td><?= $a['is_active']; ?></td>
                        <td><?= date('Y', $a['tanggal_input']); ?></td>
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