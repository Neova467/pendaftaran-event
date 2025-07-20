<?php
include("config.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['namaMahasiswa'];
    $nim = $_POST['nim'];
    $universitas = $_POST['universitas'];
    $jurusan = $_POST['jurusan'];
    $event = $_POST['namaEvent'];

    $sql = "INSERT INTO peserta_event (nama_mahasiswa, nim, universitas, jurusan, nama_event)
            VALUES ('$nama', '$nim', '$universitas', '$jurusan', '$event')";
    
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan data.");
    }
}
?>
