<?= $this->session->flashdata('pesan'); ?>
<div class="container" id="about">
  
  <div class="container col-xxl-15 px-4 py-5">
  <hr>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

      <div class="col-10 col-sm-8 col-lg-5">
        <img src="assets/LOGO-lulungan.png" 
          class="d-block mx-lg-auto img-fluid animate__animated animate__slideInRight animate__delay-200s"
          alt="Bootstrap Themes" width="500" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 sm-3">Tentang Web Kami ?</h1>
        <p class="lead">Lelungan Jogja adalah aplikasi website yang menyediakan informasi untuk setiap perjalanan destinasi anda pergi ke daerah istimewa Yogyakarta. Kami menyediakan banyak destinasi yang menarik dan terbaik. Yuk Jalan Jalan Bareng Lelulang Jogja</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">

         <!--<a href="#destinasi"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Mulai
              Perjalanan</button></a>
              <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg px-4 me-md-2">Baca Selengkapnya</button></a>-->
        </div>
      </div>
    </div>
  <hr>
  </div>

</div>
<div class="container">
    <div style="padding: 50px 0;">
        <div class="x_panel">
            <div class="x_content">
                <!-- Tampilkan semua produk -->
                <div class="row">
                    <!-- looping products -->
                    <?php foreach ($buku as $buku) { ?>
                        <!-- <div class="thumbnail" style="height: 370px;">
                            <img src="<?php echo base_url('assets/img/upload/') . $buku->image; ?>" style="max-width:100%; max-height: 100%; height: 200px; width: 180px">
                            <div class="caption">
                                <h5 style="min-height:30px;"><?= $buku->pengarang ?></h5>
                                <h5><?= $buku->penerbit ?></h5>
                                <h5><?= substr($buku->tahun_terbit, 0, 4) ?></h5>
                                <p>
                                    <?php
                                    if ($buku->stok < 1) {
                                        echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</i>";
                                    } else {
                                        echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('booking/tambahBooking/' . $buku->id) . "'> Booking lonte</a>";
                                    }
                                    ?>
                                    <a class="btn btn-outline-warning fas fw fa-search" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a>
                                </p>
                            </div>
                        </div> -->

                        <div class="col-sm-3" id="satu">
                            <div class="card mb-3">
                                <img src="<?php echo base_url('assets/img/upload/') . $buku->image; ?>" class="card-img-top" alt="..." style="max-width:100%; max-height: 100%; height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $buku->pengarang ?></h5>
                                    <p class="card-text"><?= $buku->penerbit ?></p>
                                    <h5><?= substr($buku->tahun_terbit, 0, 4) ?></h5>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!-- <?php
                                                    if ($buku->stok < 1) {
                                                        echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</i>";
                                                    } else {
                                                        echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('autentifikasi/registrasi' . $buku->id) . "'> Booking</a>";
                                                    }


                                                    ?> -->

                                            <?php
                                            if ($buku->stok < 1) {
                                                echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</i>";
                                            } else {
                                                if($user !== 'Pengunjung'){
                                                    echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('home/formbooking/' . $buku->id) . "'> Booking</a>";
                                                }else {
                                                    echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('autentifikasi') . "'> Booking</a>";
                                                }
                                            }
                                            ?>
                                            <a href="<?= base_url('home/detailBuku/' . $buku->id); ?>"><button type="button" class="btn btn-outline-warning fas fw fa-search" style="margin: 0 0 0 10px;">Detail</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end looping -->
                </div>
            </div>
        </div>
    </div>
</div>