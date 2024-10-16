<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff !important;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Data Kunjungan -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Data Kunjungan
                    </div>
                    <div class="card-body">
                        <!-- Table Kunjungan -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Pemohon</th>
                                    <th>Instansi Pemohon</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Instansi Tujuan</th>
                                    <th>Keterangan Kunjungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- PHP Script for Fetching Data -->
                                <?php
                                // Include database connection file
                               include 'koneksi.php';
                                // Check if records exist
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>" . $row["nama"] . "</td>
                                            <td>" . $row["instansi"] . "</td>
                                            <td>" . $row["tanggal_kunjungan"] . "</td>
                                            <td>" . $row["lokus"] . "</td>
                                            <td>" . $row["keterangan"] . "</td>
                                        </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Tidak ada data kunjungan.</td></tr>";
                                }
                                ?>
                                <!-- End of PHP Script -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Tabel Status Kunjungan -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Status Kunjungan
                    </div>
                    <div class="card-body">
                        <!-- Table Status Kunjungan -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Pemohon</th>
                                    <th>Instansi Pemohon</th>
                                    <th>Status Kunjungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- PHP Script for Fetching Data -->
                                <?php
                                // SQL query to fetch data from database
                                $sql_status = "SELECT kunjungan.nama, kunjungan.instansi, status_kunjungan.status 
                                    FROM kunjungan 
                                    LEFT JOIN status_kunjungan ON kunjungan.id = status_kunjungan.kunjungan_id";
                                $result_status = $conn->query($sql_status);

                                // Check if records exist
                                if ($result_status->num_rows > 0) {
                                    // Output data of each row
                                    while ($row_status = $result_status->fetch_assoc()) {
                                        echo "<tr>
                                            <td>" . $row_status["nama"] . "</td>
                                            <td>" . $row_status["instansi"] . "</td>
                                            <td>" . $row_status["status"] . "</td>
                                        </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>Tidak ada data status kunjungan.</td></tr>";
                                }

                                // Close database connection
                                $conn->close();
                                ?>
                                <!-- End of PHP Script -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
