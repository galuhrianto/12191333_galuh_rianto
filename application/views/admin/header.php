<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?php echo base_url().'assets/css/styles.css'; ?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css' ?>">
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.datatables.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">
                Luh Book</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-5 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append mr-5">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-5">
                <li class="dropdown "><a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false"><?php echo "Halo,<b>".$this->session->userdata('nama');?></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url().'admin/ganti_password' ?>"><span class="glyphicon glyphicon-lock"></span>Ganti Password</a></li>
                        <li><a href="<?php echo base_url().'admin/logout'; ?>" class="mr-5"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
</ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <br>
                            <a class="nav-link" href="<?php echo base_url().'admin'; ?>"><span class="glyphicon glyphicon-home"></span>-Dashboard</a>
                            <br>
                            <a class="nav-link" href="<?php echo base_url().'admin/buku'; ?>"><span class="glyphicon glyphicon-folder-open"></span>-Data Buku</a>
                            <a class="nav-link" href="<?php echo base_url().'admin/anggota'; ?>"><span class="glyphicon glyphicon-user"></span>-Data Anggota</a>
                            <a class="nav-link" href="<?php echo base_url().'admin/peminjaman'; ?>"><span class="glyphicon glyphicon-sort"></span>-Transaksi Peminjaman</a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <span class="glyphicon glyphicon-list-alt"></span>-Laporan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a href="<?php echo base_url().'admin/cetak_laporan_buku' ?>" class="nav-link"><i class="glyphicon glyphicon-lock"></i>Laporan Data Buku</a>
                                <a href="<?php echo base_url().'admin/cetak_laporan_anggota' ?>" class="nav-link"><i class="glyphicon glyphicon-lock"></i>Laporan Data Anggota</a>
                                <a href="<?php echo base_url().'admin/laporan_transaksi' ?>" class="nav-link"><i class="glyphicon glyphicon-lock"></i>Laporan Data Transaksi</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">

                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
                
