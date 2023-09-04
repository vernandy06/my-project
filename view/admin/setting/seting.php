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
    <body class="">
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
                        <li><a class="dropdown-item" href="../admin.php">Kembali</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../../logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
        <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Kelola Akses </h1> 
                        <div class="card mb-4">
                            <div class="card-header text-dark bg-light">
                                <i class="fas fa-table me-1"></i>
                                Data akses
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="add.php" method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password akses</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Level</label>
                                                        <input class="mx-2" type="radio" name="level" value="Admin">Admin
                                                        <input class="mx-2" type="radio" name="level" value="Anggota">Anggota
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
                                            <th scope="cal">Username</th>
                                            <th scope="cal">Nama Lengkap</th>
                                            <th scope="cal">password</th>
                                            <th scope="cal">Level</th>
                                            <th scope="cal">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=0;
                                            $query=mysqli_query($koneksi, " SELECT * FROM user");
                                            while($row=mysqli_fetch_assoc($query)){
                                                $no++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row['username'] ?></td>
                                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                                    <td><?php echo $row['password'] ?></td>
                                                    <td><?php echo $row['level'] ?></td>
                                                    <td>
                                                        <!-- tombol edit -->
                                                    <!-- <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#modal-edit<?php echo $row['id'] ?>">
                                                    Edit
                                                    </button> -->
                                                        <!-- akhir Tombol edit -->

                                                        <!-- tombol hapus -->
                                                    <button type="button" class="btn btn-danger float-end mx-2" data-bs-toggle="modal" data-bs-target="#modal-hapus<?php echo $row['id'] ?>">
                                                    Hapus
                                                    </button>
                                                        <!-- akhir tombol hapus -->
                                                    </td>
                                                </tr>
                                                <!-- Awal Sesi Hapus -->
                                                <div class="modal fade" id="modal-hapus<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="delet.php" method="POST">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Anda yakin ingin hapus</label>
                                                                        <input type="hidden" class="form-control" id="exampleInputPassword1" name="id" value="<?php echo $row['id']?>">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_lengkap" value="<?php echo $row['nama_lengkap']?>" readonly>
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
                                                <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="edit.php" method="POST">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Username</label>
                                                                        <input type="hidden" class="form-control" id="exampleInputPassword1" name="id" value="<?php echo $row['id']?>">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="username" value="<?php echo $row['username']?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nama Lengkap</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap" value="<?php echo $row['nama_lengkap']?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Password</label>
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $row['password']?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Ubah Akses</label>
                                                                        <input class="mx-2" type="radio" name="level" value="Admin">Admin
                                                                        <input class="mx-2" type="radio" name="level" value="Anggota">Anggota
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
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
