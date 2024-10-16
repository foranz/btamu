<?php
include 'koneksi.php';

// Ambil nilai dari formulir
$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$no_hp = $_POST['no_hp'];
$wa = $_POST['wa'];
$email = $_POST['email'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$lokus = $_POST['lokus'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$topik = $_POST['topik'];
$jumlah = $_POST['jumlah'];
$pimpinan = $_POST['pimpinan'];
$keterangan = $_POST['keterangan'];
$no_surat = $_POST['no_surat'];
$kepada = $_POST['kepada'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO kunjungan (nama, instansi, no_hp, wa, email, provinsi, alamat, lokus, hari, jam, topik, jumlah, pimpinan, keterangan, no_surat, kepada) VALUES ('$nama', '$instansi', '$no_hp', '$wa', '$email', '$provinsi', '$alamat', '$lokus', '$hari', '$jam', '$topik', '$jumlah', '$pimpinan', '$keterangan', '$no_surat', '$kepada')";

if(mysqli_query($koneksi, $query)) {
    echo '<script>alert("Terima Kasih data anda telah masuk"); window.location.href = "index.html";</script>';
} else {
    echo "Error: " . mysqli_error($koneksi);
}


// Menutup koneksi ke database
mysqli_close($koneksi);
?>


<!-- // Jalankan query
if(mysqli_query($koneksi, $query)) {
    echo "Data kunjungan berhasil disimpan.";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?> -->
