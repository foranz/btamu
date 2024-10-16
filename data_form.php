<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Buku Tamu Digital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/book.png"  rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</script>
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-grow text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="index.html" class="navbar-brand p-0">
             <h1 class="m-0">
              <img src="img/book.png" alt="Logo" /> Buku Tamu<span class="fs-5">
                Digital</span
              >
            </h1>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
           <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
              <a href="index.html" class="nav-item nav-link ">Home</a>
              <a href="data_form.php" class="nav-item nav-link active">Data Kunjungan</a>
              <a href="admin.php" class="nav-item nav-link"
                >Status Kunjungan</a
              >
            </div>
            
                    <a href="login.php" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Admin</a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-primary hero-header mb-5">
          <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
              <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Data Formulir Kunjungan</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px" />
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                      <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="text-white" href="#">Admin</a>
                    </li>
                    
                    <li
                      class="breadcrumb-item text-white active"
                      aria-current="page"
                    >
                      Data Kunjungan
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <?php
// Include file koneksi database
include 'koneksi.php';

// Query untuk mengambil data dari tabel kunjungan
$query = "SELECT * FROM kunjungan";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil dijalankan
if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}
?>

<!-- Tabel Data Reservasi -->
<div class="container-xxl py-5">
  <div class="container px-lg-5">
    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="position-relative d-inline text-primary ps-4">Data Reservasi</h6>
      <h2 class="mt-2">Data Kunjungan</h2>
    </div>
    <div class="row g-4">
      <div class="col">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pemohon</th>
                <th>Instansi Pemohon</th>
                <th>Tanggal Kunjungan</th>
                <th>Instansi Tujuan</th>
                <th>Keterangan Kunjungan</th>
                <th>Status Kunjungan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Iterasi untuk menampilkan data kunjungan
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['instansi']; ?></td>
                  <td><?php echo $row['hari']; ?></td>
                  <td><?php echo $row['lokus']; ?></td>
                  <td><?php echo $row['keterangan']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td>
                    <button type="button" class="btn btn-secondary text-light btn-sm" data-toggle="modal" data-target="#myModal_<?php echo $row['id']; ?>"><i class="fas fa-print"></i> Detail</button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail -->
<?php
// Koneksi database dan query untuk mengambil data kunjungan
include 'koneksi.php';
$query = "SELECT * FROM kunjungan";
$result = mysqli_query($koneksi, $query);

// Iterasi untuk menampilkan modal untuk setiap data kunjungan
while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="modal fade" id="myModal_<?php echo $row['id']; ?>">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Kunjungan</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
          <!-- Isi detail data kunjungan -->
          <p><strong>Nama:</strong> <?php echo $row['nama']; ?></p>
          <p><strong>Instansi:</strong> <?php echo $row['instansi']; ?></p>
          <p><strong>Nomor HP:</strong> <?php echo $row['no_hp']; ?></p>
          <p><strong>WhatsApp:</strong> <?php echo $row['wa']; ?></p>
          <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
          <p><strong>Provinsi:</strong> <?php echo $row['provinsi']; ?></p>
          <p><strong>Alamat:</strong> <?php echo $row['alamat']; ?></p>
          <p><strong>Lokasi Kunjungan:</strong> <?php echo $row['lokus']; ?></p>
          <p><strong>Tanggal Kunjungan:</strong> <?php echo $row['hari']; ?></p>
          <p><strong>Jam Kunjungan:</strong> <?php echo $row['jam']; ?></p>
          <p><strong>Topik Kunjungan:</strong> <?php echo $row['topik']; ?></p>
          <p><strong>Jumlah Peserta:</strong> <?php echo $row['jumlah']; ?></p>
          <p><strong>Nama Pimpinan:</strong> <?php echo $row['pimpinan']; ?></p>
          <p><strong>Keterangan:</strong> <?php echo $row['keterangan']; ?></p>
          <p><strong>Nomor Surat:</strong> <?php echo $row['no_surat']; ?></p>
          <p><strong>Kepada:</strong> <?php echo $row['kepada']; ?></p>
          <!-- Tambahkan detail data lainnya sesuai kebutuhan -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


  <!-- Footer Start -->
      <div
        class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container px-lg-5">
          <div class="copyright text-center">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Buku Tamu Digital</a>, All
                Right Reserved.

    
                Designed By Depita
                
              </div>
        
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
      <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <!-- Script for updating status -->



    
  </body>
</html>
