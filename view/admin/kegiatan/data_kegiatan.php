<?php 
include '../../../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <Link rel="icon" href="../../../assets/img/titleimg.jpeg" type="image/x-icon">
        <title>OSIKU - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
    session_start();
    if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
    }
    ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../admin.php">OSIKU</a>
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
                        <li><a class="dropdown-item" href="../../../logout.php">Logout</a></li>
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
                                <a class="nav-link" href="../admin.php">
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
                                    <a class="nav-link" href="../anggota/data_anggota.php">Anggota</a>
                                    <a class="nav-link" href="kegiatan/data_kegiatan.php">Kegiatan</a>
                                    <a class="nav-link" href="../usulan/data_usulan.php">Issue</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Keuangan</div>
                                <a class="nav-link" href="../keuangan/masuk/pemasukan.php">
                                    <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
                                    <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
                                    </svg></div>
                                    Pemasukan
                                </a>
                                <a class="nav-link" href="../keuangan/keluar/pengeluaran.php">
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
                        <?php echo $_SESSION['username']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Kegiatan </h1> 
                        <div class="card mb-4">
                            <div class="card-header text-dark bg-light">
                                <i class="fas fa-table me-1"></i>
                                Data Kegiatan Organisasi
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="tambah_kegiatan.php" method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label">Tentang</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tentang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Tempat</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tempat">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Waktu</label>
                                                        <input class="form-control" type="date" name="waktu" value="<?php echo date('Y-m-d'); ?>" />
                                                    </div>
                                                    <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir modal     -->
                            </div>
                            <!-- star table -->
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr class="">
                                            <th scope="cal">No</th>
                                            <th scope="cal">Tentang</th>
                                            <th scope="cal">Tempat</th>
                                            <th scope="cal">Waktu</th>
                                            <th scope="cal">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=0;
                                            $query=mysqli_query($koneksi, " SELECT * FROM kegiatan");
                                            while($row=mysqli_fetch_assoc($query)){
                                                $no++;
                                        ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row['tentang'] ?></td>
                                                    <td><?php echo $row['tempat'] ?></td>
                                                    <td><?php echo $row['waktu'] ?></td>
                                                    <td><!-- tombol edit -->
                                                        <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#modal-edit<?php echo $row['id_kegiatan'] ?>">
                                                        Edit
                                                        </button>
                                                            <!-- akhir Tombol edit -->

                                                            <!-- tombol hapus -->
                                                        <button type="button" class="btn btn-danger float-end mx-2" data-bs-toggle="modal" data-bs-target="#modal-hapus<?php echo $row['id_kegiatan'] ?>">
                                                        Hapus
                                                        </button>
                                                            <!-- akhir tombol hapus -->
                                                        
                                                    </td>
                                                </tr>
                                                 <!-- Awal Sesi Hapus -->
                                                 <div class="modal fade" id="modal-hapus<?php echo $row['id_kegiatan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="hapus_kegiatan.php" method="POST">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Anda yakin ingin hapus</label>
                                                                        <input type="hidden" class="form-control" id="exampleInputPassword1" name="id_kegiatan" value="<?php echo $row['id_kegiatan']?>">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tentang" value="<?php echo $row['tentang']?>" readonly>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Akhir sesi Hapus -->
                                                <!-- Awal sesi edit -->
                                                <div class="modal fade" id="modal-edit<?php echo $row['id_kegiatan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Kegiatan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="edit_kegiatan.php" method="POST">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tentang</label>
                                                                        <input type="hidden" class="form-control" id="exampleInputPassword1" name="id_kegiatan" value="<?php echo $row['id_kegiatan']?>">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tentang" value="<?php echo $row['tentang']?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tempat</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat" value="<?php echo $row['tempat']?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Waktu</label>
                                                                        <input type="date" class="form-control" id="exampleInputPassword1" name="waktu" value="<?php echo  $row['waktu']?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- akhir sesi edit -->
                                        <?php }
                                         ?>

                                        
                                    </tbody>
                                </table>
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
        <script src="../../../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../../assets/demo/chart-area-demo.js"></script>
        <script src="../../../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../../js/datatables-simple-demo.js"></script>
    </body>
</html>
