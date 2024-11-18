<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
    <h2>Form Mahasiswa</h2>
    <form action="#" method="POST">
        @csrf
        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim"><br><br>
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
