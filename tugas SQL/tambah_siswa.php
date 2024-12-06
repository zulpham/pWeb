<?php
$conn = new mysqli("localhost", "root", "", "sekolahan");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_siswa = $_POST['nama_siswa'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $jk_siswa = $_POST['jk_siswa'];
    $agama_siswa = $_POST['agama_siswa'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO data_siswa (id_siswa, nama_siswa, alamat_siswa, jk_siswa, agama_siswa, asal_sekolah) 
    VALUES ('', '$nama_siswa', '$alamat_siswa', '$jk_siswa', '$agama_siswa', '$asal_sekolah')";


}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa</title>
</head>
<body>
    <h1>Formulir Pendaftaran Siswa</h1>
    <form action="" method="POST">

        <label for="nama_siswa">Nama Siswa:</label><br>
        <input type="text" id="nama_siswa" name="nama_siswa" required><br><br>

        <label for="alamat_siswa">Alamat Siswa:</label><br>
        <textarea id="alamat_siswa" name="alamat_siswa" required></textarea><br><br>

        <label for="jk_siswa">Jenis Kelamin:</label><br>
        <input type="text" id="jk_siswa" name="jk_siswa" required><br><br>

        <label for="agama_siswa">Agama:</label><br>
        <input type="text" id="agama_siswa" name="agama_siswa" required><br><br>

        <label for="asal_sekolah">Asal Sekolah:</label><br>
        <input type="text" id="asal_sekolah" name="asal_sekolah" required><br><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>

<?php
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>