<div class="x_panel" align="center" style="padding: 50px 0;">
    <div class="x_content">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;">
                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" style="max-width:100%; max-height: 300%; height: 250px; width: 250px">
                    <div class="caption">
                        <hr>
                        <h5 style="min-height:40px;" align="center"><?= $pengarang ?></h5>
                        <center>
                            <table class="table table-stripped">
                                <tr>
                                    <th nowrap>Destinasi: </th>
                                    <td nowrap><?= $judul; ?></td>
                                    <td>&nbsp;</td>
                                    
                                </tr>
                                <tr>
                                    <th nowrap>Daerah: </th>
                                    <td><?= $penerbit ?></td>
                                    <td>&nbsp;</td>
                                    
                                </tr>
                                <tr>
                                    <th nowrap>Tahun: </th>
                                    <td><?= substr($tahun, 0, 4) ?></td>
                                    <td>&nbsp;</td>
                                    
                                </tr>
                                <tr>
                                    <th>Deskripsi:</th>
                                    <td><?= $isbn ?></td>
                                    <td>&nbsp;</td>
                                    
                                </tr>
                            </table>
                        </center>
                        <p>
                            <?php
                            if ($user !== 'Pengunjung') {
                                echo "<a class='btn btn-outline-primary fas fw fa-shoppingcart' href='" . base_url('home/formbooking/' . $id) . "'> Booking</a>";
                            } else {
                                echo "<a class='btn btn-outline-primary fas fw fa-shoppingcart' href='" . base_url('autentifikasi') . "'> Booking</a>";
                            }
                            ?>
                            <!-- <a class="btn btn-outline-primary fas fw fa-shoppingcart" href="<?= base_url('booking/tambahBooking/' . $id); ?>"> Booking</a> -->
                            <span class="btn btn-outline-secondary fas fw fareply" onclick="window.history.go(-1)"> Kembali</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>