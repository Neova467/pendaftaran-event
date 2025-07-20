<?php
include("config.php");

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim'];
    $universitas = $_POST['universitas'];
    $jurusan = $_POST['jurusan'];
    $event = $_POST['nama_event'];

    $sql = "INSERT INTO peserta_event (nama_mahasiswa, nim, universitas, jurusan, nama_event) 
            VALUES ('$nama', '$nim', '$universitas', '$jurusan', '$event')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        die("Gagal menyimpan data...");
    }
} else {
    die("Akses langsung dilarang...");
}
