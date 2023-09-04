<?php 
include '../../config/koneksi.php';

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
        <title>OSIKU</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
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
            <a class="navbar-brand ps-3" href="userview.php">OSIKU</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
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
                            <a class="nav-link" href="userview.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Login Akses :</div>
                        <?php echo $_SESSION['username']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Daftar Anggota</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dagt.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Daftar Kegiatan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dkgt.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Data Kas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dkas.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Beri Usulan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kusul.php" >View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="danggota">Daftar Anggota</li>
                        </ol>
                        <!-- star data anggota-->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <i class="fas fa-table me-1"></i>
                                Data Anggota
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="cal">No</th>
                                            <th scope="cal">Nama</th>
                                            <th scope="cal">Jenis Kelamin</th>
                                            <th scope="cal">Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=0;
                                        $query=mysqli_query($koneksi, " SELECT * FROM anggota");
                                        while($row=mysqli_fetch_assoc($query)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['jenis_kelamin'] ?></td>
                                            <td><?php echo $row['jabatan'] ?></td>
                                            
                                        </tr>
                                        
                                        <?php }
                                         ?>
                                        
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                    <!-- akhir data anggota -->
                    <!-- star data anggota-->
                    <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="dkegiatan">Daftar Kegiatan</li>
                        </ol>
                    
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-white">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                            <table class="table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tentang</th>
                                        <th>Tempat</th>
                                        <th>Waktu</th>
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
                                    </tr>
                                <?php 
                                }
                                ?>
                                </tbody>
                            </table>
                            </div>  
                        </div>
                    </div>  
                    <!-- Akhir Data Kegiatan -->
                    <!-- Star Data Kas -->
                    <div class="container-fluid px-4">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="dkas">Kas Organisasi</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header bg-success text-white">
                                <i class="fas fa-table me-1"></i>
                                Total Kas
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="cal">No</th>
                                            <th scope="cal">Nama</th>
                                            <th scope="cal">Jenis Kelamin</th>
                                            <th scope="cal">Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=0;
                                        $query=mysqli_query($koneksi, " SELECT * FROM anggota");
                                        while($row=mysqli_fetch_assoc($query)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['jenis_kelamin'] ?></td>
                                            <td><?php echo $row['jabatan'] ?></td>
                                            
                                        </tr>
                                        
                                        <?php }
                                         ?>
                                        
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                    <!-- Akhir Data Kas -->
                    <!-- Awal form usulan -->
                    <div class="container-fluid px-4">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="kusul">Usulan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                <i class="fas fa-table me-1"></i>
                                Kotak Usulan
                            </div>
                            <div class="card-body">
                            <form class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>  
                        </div>
                    </div>



                    
                </main>
                <footer class="py-4 bg-dark text-white mt-auto">
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
        <script src="../../assets/demo/chart-area-demo.js"></script>
        <script src="../../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../js/datatables-simple-demo.js"></script>
    </body>
</html>
