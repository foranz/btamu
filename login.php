<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Buku Tamu Digital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/book.png" rel="icon" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
<body>
    <!-- Login -->
    <section class="vh-100" style="background-color: #37517e;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="img/hero.png"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">

                  
                    <?php
                    include 'koneksi.php';
                    

                    if (isset($_POST['login'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $data = mysqli_query($koneksi,"select * from admin where username = '$username' AND password='$password'");
                        $sesi   = mysqli_num_rows($data);

                       if ($sesi > 0) {
                            $d = mysqli_fetch_object($data);
                            $_SESSION['a_global']=$d;
                            $_SESSION['id']=$d->id_admin;

                                   echo '<script>alert("Login Berhasil"); window.location.href = "admin.php";</script>';
        exit();
                        } else {
                            $errorMessage = "Username atau password salah";
                        }
                    }
                    ?>


                    <form method="post">

                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">Login</span>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk sebagai Admin</h5>

                      <?php if (isset($errorMessage)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMessage; ?>
                        </div>
                      <?php endif; ?>

                      <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control form-control-lg" />
                        <label class="form-label">Username</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label">Password</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn btn-info" type="submit" name="login">Login</button>
                       <a class="btn btn-danger btn-user" href="index.php">
                          Kembali
                       </a>

                      </div>
                    </form>

                    <!-- Tambahkan keterangan dan link jika belum ada akun -->
                    <div class="text-center">
                      <!-- <p>Belum memiliki akun? <a href="daftar.php">Daftar disini</a></p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
