<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="../css/form-daftar.css">
</head>
<body>
    <div class="form-container">
        <header>
            <h2>Form Pendaftaran</h2>
            <p>Silakan isi data diri Anda dengan lengkap</p>
        </header>

        <form action="proses-daftar.php" method="POST">
            <div class="input-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama lengkap siswa" required>
            </div>

            <div class="input-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Nama sekolah asal" required>
            </div>

            <div class="row">
                <div class="input-group">
                    <label for="no_pribadi">No. HP Pribadi</label>
                    <input type="text" id="no_pribadi" name="no_pribadi" placeholder="Contoh: 0812..." required>
                </div>
                <div class="input-group">
                    <label for="no_wali">No. HP Orang Tua/Wali</label>
                    <input type="text" id="no_wali" name="no_wali" placeholder="Contoh: 0812..." required>
                </div>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Alamat email aktif" required>
            </div>

            <div class="input-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea id="alamat" name="alamat" rows="4" placeholder="Alamat tinggal saat ini" required></textarea>
            </div> 

            <button type="submit" name="daftar" class="btn-submit">Daftar Sekarang</button>
            <a href="index.php" class="btn-back">Kembali</a>
        </form>
    </div>
<script src="../java_script/form-daftar.js"></script>
</body>
</html>