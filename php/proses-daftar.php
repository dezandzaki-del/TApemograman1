<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "nama_database_anda"; // GANTI dengan nama database Anda

$db = mysqli_connect($host, $user, $pass, $db_name);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Cek apakah tombol daftar sudah diklik
if (isset($_POST['daftar'])) {

    // Ambil data dari form
    $nama = $_POST['nama'];
    $asal = $_POST['asal_sekolah'];
    $no_p = $_POST['no_pribadi'];
    $no_w = $_POST['no_wali'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // Buat query untuk menyimpan data sesuai kolom di gambar
    $sql = "INSERT INTO pendaftaran (nama, asal_sekolah, no_pribadi, no_wali, email, alamat) 
            VALUES ('$nama', '$asal', '$no_p', '$no_w', '$email', '$alamat')";
    
    $query = mysqli_query($db, $sql);

    // Cek apakah query berhasil
    if ($query) {
        // Jika berhasil, alihkan ke halaman sukses atau index
        header('Location: index.php?status=sukses');
    } else {
        // Jika gagal, alihkan dengan status gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>