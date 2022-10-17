        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #f7941d;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-archway" style="transform: rotate(15deg)"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lelungan Jogja</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Looping Menu-->
                <div class="sidebar-heading">
                    Home
                </div>
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Halaman Admin</span></a>
                                <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('home'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Halaman User</span></a>
                        </li>
                    </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Admin
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('temp'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Riwayat Pemesanan</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Data Destinasi</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Data Pengguna</span></a>
                        </li>
                    </li>
			

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

				<div class="sidebar-heading">
                    Laporan
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>">
                                <i class="fa fa-fw fa-address-book"></i>
                                <span>Laporan Destinasi</span></a>
                        </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --   > 
        
        