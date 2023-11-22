<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENDAFTARAN UMROH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>FORMULIR PENDAFTARAN HAJI DAN UMROH</h3>
        <form action="proses_input.php" method="POST">
            <label for="nik">NIK</label>
            <input type="number"name="nik" class="form-input" maxlength="100" required>

            <label for="nama">NAMA LENGKAP</label>
            <input type="text"name="nama" class="form-input" maxlength="100" required>

            <label for="alamat">Alamat</label>
            <input type="text"name="alamat" class="form-input" maxlength="100" required>

            <label for="tanggal_lahir">Tanggal lahir</label>
            <input type="date" name="tanggal_lahir" class="form-input" maxlength="100" required>

            <label>Jenis Kelamin</label>
           <select name="jenis_kelamin" value="Jenis Kelamin">Jenis Kelamin
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
           </select>
            <label for="no_telp">No Telpon</label>
            <input type="number"name="no_telp" class="form-input" maxlength="100" required>

            <label for="email">Email</label>
            <input type="text"name="email" class="form-input" maxlength="100" required>

            <input type="submit" value="Daftar">
            
        </form>
    </div>
</body>
</html>