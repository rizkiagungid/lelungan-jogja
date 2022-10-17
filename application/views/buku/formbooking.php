<div class="py-5 text-center" style="margin-top:100px;margin-bottom:50px;">
    <h2>Pemesanan Tiket</h2>
    <p class="lead">Silahkan Mengisi Form Pemesanan Tiket Disini.</p>
    <img class="d-block mx-auto mb-4" src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" alt="" width="150" height="150">
</div>
<div class="container" style="margin-bottom:150px;">
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" disabled value="<?= $email; ?>">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="Nama Lengkap" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" name="nama" disabled value="<?= $user; ?>">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Nama Destinasi</label>
            <input type="text" class="form-control" name="alamat" disabled value="<?= $judul; ?>">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Harga</label>
            <input id="hargaBuku" type="text" class="form-control" name="alamat" disabled value="<?= $harga_buku; ?>">
        </div>
        <div class="mb-3">
            <label for="pembayaran" class="form-label">Jumlah Tiket</label>
            <br>
            <select id="pembayaran" name="pembayaran" class="form-control form-control" onchange="changeUrl()">
                <option value="1" name="tiket">1 Tiket</option>
                <option value="2" name="tiket">2 Tiket</option>
                <option value="3" name="tiket">3 Tiket</option>
                ">QRIS</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Total Harga</label>
            <p class="form-control" id="totalHarga"><?= $harga_buku; ?></p>
            <!-- <input id="hargaBuku" type="text" class="form-control" name="total_harga" disabled value="<?= $harga_buku; ?>"> -->
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Sudah Melakukan Vaksinasi Covid19</label>
        </div>
        <a type="submit" value="Submit" name="bayar" class="btn btn-primary" onclick="submit()">Submit</a>
        <!-- <a type="submit" value="Submit" name="bayar" class="btn btn-primary" href="<?= base_url('booking/tambahBooking/' . $id); ?>">Submit</a> -->
        <!-- <?php foreach ($buku as $buku) { ?>
            <a type="submit" name="bayar" class="btn btn-primary" href="<?= base_url('booking/tambahBooking/' . $buku->id); ?>">Submit</a>
        <?php } ?> -->

    </form>

</div>

<script>
    let defaultTiket = '1'
    var newUrl = ''

    var hargaBuku = document.getElementById('hargaBuku').defaultValue

    function changeUrl() {
        var elementPembayaran = document.getElementById('pembayaran')
        var getTiket = elementPembayaran.options[elementPembayaran.selectedIndex].value;
        defaultTiket = getTiket

        var getId = window.location.pathname.split('/')[4]
        document.getElementById('totalHarga').innerHTML = parseInt(hargaBuku) * parseInt(getTiket)
        
        newUrl = `http://localhost:8080/master-pustaka-booking/booking/tambahbooking/${getId}/${getTiket}/${hargaBuku * getTiket}`
    }
    
    function submit(){
        if(newUrl.length === 0){
            var getId = window.location.pathname.split('/')[4]

            window.location.href = `http://localhost:8080/master-pustaka-booking/booking/tambahbooking/${getId}/${defaultTiket}/${hargaBuku * defaultTiket}`
        }
        else{
            window.location.href = newUrl
        }
    }
</script>