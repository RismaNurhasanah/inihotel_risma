
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-hotel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">InI <sup>Hotel</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - User -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>
    <!-- Nav Item - Jenis Kamar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/Kamar'); ?>">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Data Kamar</span></a>
    </li>

    <!-- Nav Item - Kamar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("/jenis"); ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Jenis Kamar</span></a>
    </li>

    <!-- Nav Item - Konsumen -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/konsumen'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Konsumen</span></a>
    </li>

    <!-- Nav Item - Transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/transaksi'); ?>">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Transaksi</span></a>
    </li>
   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

     <!-- Nav Item - Logout -->
     <li class="nav-item">
        <a class="nav-link" href="auth/logout">
        <i class="fas fa-sign-out-alt "></i>
            <span>Logout</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
