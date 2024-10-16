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
              <img src="img/book.png" alt="Logo" /> Buku Tamu Digital
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
              <a href="form.php" class="nav-item nav-link active">Form Kunjungan</a>
              <a href="status.php" class="nav-item nav-link"
                >Status Kunjungan</a
              >
            </div>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-primary hero-header mb-5">
          <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
              <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Form Kunjungan</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px" />
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                      <a class="text-white" href="#">Home</a>
                    </li>
                   
                    <li
                      class="breadcrumb-item text-white active"
                      aria-current="page"
                    >
                      Form
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->


      <!-- Contact Start -->
      <div class="container-xxl py-5">
<div class="container px-lg-5">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
        data-wow-delay="0.1s">
        <h6 class="position-relative d-inline text-primary ps-4">Form Kunjungan</h6>
        <h2 class="mt-2">Isi form ini untuk melakukan kunjungan</h2>
      </div>
      <div class="wow fadeInUp" data-wow-delay="0.3s">
        <form action="submit_form.php" method="post">
          <div class="row g-3">
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                <label for="nama">Nama*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Nama Instansi" required>
                <label for="instansi">Nama Instansi*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="tel" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" required>
                <label for="no_hp">Nomor HP (dapat menerima panggilan)*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="tel" class="form-control" name="wa" id="wa" placeholder="WhatsApp" required>
                <label for="wa">WhatsApp (boleh sama dengan nomor HP)*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                <label for="email">Email Instansi/Lembaga/Pemohon*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <select class="form-select" name="provinsi" id="provinsi" required>
                  <option selected disabled>Pilih Provinsi</option>
                  <option>Aceh</option>
                  <option>Sumatera Utara</option>
                  <option>Sumatera Barat</option>
                  <option>Riau</option>
                  <option>Kepulauan Riau</option>
                  <option>Jambi</option>
                  <option>Bengkulu</option>
                  <option>Sumatera Selatan</option>
                  <option>Kepulauan Bangka Belitung</option>
                  <option>Lampung</option>
                  <option>Banten</option>
                  <option>DKI Jakarta</option>
                  <option>Jawa Barat</option>
                  <option>Jawa Tengah</option>
                  <option>DI Yogyakarta</option>
                  <option>Jawa Timur</option>
                  <option>Bali</option>
                  <option>Nusa Tenggara Barat</option>
                  <option>Nusa Tenggara Timur</option>
                  <option>Kalimantan Barat</option>
                  <option>Kalimantan Tengah</option>
                  <option>Kalimantan Selatan</option>
                  <option>Kalimantan Timur</option>
                  <option>Kalimantan Utara</option>
                  <option>Sulawesi Utara</option>
                  <option>Sulawesi Tengah</option>
                  <option>Sulawesi Selatan</option>
                  <option>Sulawesi Tenggara</option>
                  <option>Gorontalo</option>
                  <option>Sulawesi Barat</option>
                  <option>Maluku</option>
                  <option>Maluku Utara</option>
                  <option>Papua</option>
                  <option>Papua Barat</option>
                  <option>Papua Selatan</option>
                  <option>Papua Pegunungan</option>
                  <option>Papua Tengah</option>

                  <!-- Opsi Provinsi -->
                </select>
                <label for="provinsi">Provinsi*</label>
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat Instansi" required></textarea>
                <label for="alamat">Alamat Instansi*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <select class="form-select" name="lokus" id="lokus" required>
                  <option selected disabled>Pilih bidang yang Akan Dikunjungi</option>
                  <option>Bidang E-Goverment</option>
                  <option>Bidang Umum</option>
                  <option>Bidang Persandian dan Keamanan Informasi</option>
                  <option>Bidang Teknologi Informasi dan Teknologi</option>
                  <option>Bidang Informasi dan Komunikasi Publik</option>
                 
                </select>
                <label for="lokus">Bidang yang Akan Dikunjungi*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="date" class="form-control" name="hari" id="hari" required>
                <label for="hari">Hari Kunjungan*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="time" class="form-control" name="jam" id="jam" required>
                <label for="jam">Jam Berkunjung*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" name="topik" id="topik" placeholder="Topik Diskusi" required></textarea>
                <label for="topik">Topik Diskusi (terangkan dengan jelas)*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                <label for="jumlah">Jumlah Pengunjung*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="pimpinan" id="pimpinan" placeholder="Rencana Pimpinan Kunjungan" required>
                <label for="pimpinan">Rencana Pimpinan Kunjungan*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan Lainnya"></textarea>
                <label for="keterangan">Keterangan Lainnya</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No. Surat Permohonan Kunjungan" required>
                <label for="no_surat">No. Surat Permohonan Kunjungan*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="kepada" id="kepada" placeholder="Kepada" required>
                <label for="kepada">Kepada*</label>
              </div>
            </div>
            
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3" type="submit">
                Kirim Permohonan
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

      </div>

      <!-- Contact End -->

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

    
                Designed By
                <a class="border-bottom" href="https://htmlcodex.com"
                  >Diskominfo Palembang</a
                >
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
  </body>
</html>
