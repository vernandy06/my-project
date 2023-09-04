<?php 
include "../../config/koneksi.php"


// $agt = mysqli_query($koneksi, "SELECT * FROM anggota")
// $count1 = mysqli_num_rows($agt);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <Link rel="icon" href="../../assets/img/titleimg.jpeg" type="image/x-icon">
        <title>OSIKU - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:../../index.php?pesan=gagal");
 }

 ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin.php">OSIKU</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="setting/seting.php">Kelola Akses</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="admin.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Dashboard
                                </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    page
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="anggota/data_anggota.php">Anggota</a>
                                    <a class="nav-link" href="kegiatan/data_kegiatan.php">Kegiatan</a>
                                    <a class="nav-link" href="usulan/data_usulan.php">Issue</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Keuangan</div>
                                <a class="nav-link" href="keuangan/masuk/pemasukan.php">
                                    <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
                                    <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
                                    </svg></div>
                                    Pemasukan
                                </a>
                                <a class="nav-link" href="keuangan/keluar/pengeluaran.php">
                                    <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                    </svg></div>
                                    Pengeluaran
                                </a>
                               
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['level']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Selamat Datang 
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Anda Adalah <?php echo $_SESSION['level']; ?></li>
                        </ol>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">TOTAL KAS <h1 class="float-end">↓</h1>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#totalkas">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Total Anggota
                                        <div class="float-end"><h1><?php 
                                        $agt = mysqli_query($koneksi, "SELECT * FROM anggota");
                                        $count1 = mysqli_num_rows($agt);
                                        echo $count1;
                                        ?></h1>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="anggota/data_anggota.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Data Kegiatan
                                    <div class="float-end"><h1><?php 
                                        $agt = mysqli_query($koneksi, "SELECT * FROM kegiatan");
                                        $count1 = mysqli_num_rows($agt);
                                        echo $count1;
                                        ?></h1>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kegiatan/data_kegiatan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Issue
                                    <div class="float-end"><h1><?php 
                                        $agt = mysqli_query($koneksi, "SELECT * FROM usul");
                                        $count1 = mysqli_num_rows($agt);
                                        echo $count1;
                                        ?></h1>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="usulan/data_usulan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Data Pemasukan
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">NO</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $no=0;
                                            $query=mysqli_query($koneksi, " SELECT * FROM pemasukan");
                                            $total= 0;
                                            while($row=mysqli_fetch_assoc($query)){
                                                $total += $row['jumlah'];
                                                $no++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row['tanggal'] ?></td>
                                                    <td><?php echo $row['keterangan'] ?></td>
                                                    <td><?php echo "Rp ". number_format($row['jumlah'], 0, '.','.') ?></td>
                                                
                                                </tr>
                                            <?php  
                                            }
                                            ?>
                                                <tr>
                                                    <th colspan="3" class="text-center">Total</th>
                                                    <th colspan=""><?php echo "Rp ". number_format($total)?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Data Pengeluaran
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $no=0;
                                            $query=mysqli_query($koneksi, " SELECT * FROM pengeluaran");
                                            $total1= 0;
                                            while($row=mysqli_fetch_assoc($query)){
                                                $total1 += $row['jumlah'];
                                                $no++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row['tanggal'] ?></td>
                                                    <td><?php echo $row['keterangan'] ?></td>
                                                    <td><?php echo "Rp ". number_format($row['jumlah'], 0, '.','.') ?></td>
                                                
                                                </tr>
                                            <?php  
                                            }
                                            ?>
                                                <tr>
                                                    <th colspan="3" class="text-center">Total</th>
                                                    <th colspan=""><?php echo "Rp ". number_format($total1)?></th>
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="totalkas">
                            <div class="col mt-4">
                                <div class="card mb-4">
                                    <div class="card-header bg-success text-white">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        TOTAL UANG KAS PADA ORGANISASI
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">Pemasukan</th>
                                                <th scope="col">Pengeluaran</th>
                                                <th scope="col" >Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo "Rp ". number_format($total) ?>  </td>
                                                    <td><?php echo "Rp ". number_format($total1) ?></td>
                                                    <td class="">
                                                        <?php  echo "Rp ". number_format($total-=$total1) ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; OSIKU 2022</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../js/datatables-simple-demo.js"></script>
    </body>
</html>
