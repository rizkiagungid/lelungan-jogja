<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka-Booking | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/logo-pb.png'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/css/bootstrap.css'); ?>">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/datatable/datatables.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <!-- Mulai Navigasi / Header-->
    <header class="header-global">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('/') ?>">
                    <font color="white"><b>Lelungan Jogja</b></font>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: flex-end;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">
                                <font color="white">Beranda</font>
                            </a>
                        </li>
                        <?php
                        if (!empty($this->session->userdata('email'))) { ?>
                            <a class="nav-item nav-link" href="<?= base_url('booking') ?>" style="color: #fff;">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Destinasi</a>
                            <a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>" style="color: #fff;">Profil Saya</a>
                            <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>" style="color: #fff;"><i class="fas fw fa-login"></i> Log out</a>
                        <?php } else { ?>
                            <a class="nav-item nav-link" href="/master-pustaka-booking/autentifikasi/registrasi" style="color: #fff;"><i class="fas fw fa-login" style="color: #fff;"></i> Daftar</a>
                            <a class="nav-item nav-link" href="/master-pustaka-booking/autentifikasi" style="color: #fff;"><i class="fas fw fa-login"></i> Log in</a>
                        <?php } ?>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Selesai Navigasi / Header-->
    <div class="container mt-5">