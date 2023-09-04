<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <Link rel="icon" href="assets/img/titleimg.jpeg" type="image/x-icon">
        <title>Login - OSIKU</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-sece">
 
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <!-- Pesan php -->
                                        <?php
                                        if(isset($_GET['pesan'])) {
                                            
                                        if($_GET['pesan']=="gagal")
                                        ?>
                                        <div class="alert alert-danger text-center" role="alert">
                                        Username Atau Password Yang Anda Masukan Salah !
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    <!-- Akhir pesan -->
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="config/cek_login.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" placeholder="Username" type="text" name="username" class="form_login"/>
                                                <label>Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" placeholder="Password" name="password" class="form_login" />
                                                <label>Password</label>
                                            </div>
                                            
                                            <div align="center" class="mt-4 mb-0">
                                               
                                                <input type="submit" class="btn btn-primary btn-user btn-block" value="LOGIN">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
