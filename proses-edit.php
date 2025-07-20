<?php
include("config.php");

// cek apakah tombol simpan sudah diklik
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim'];
    $universitas = $_POST['universitas'];
    $jurusan = $_POST['jurusan'];
    $event = $_POST['nama_event'];

    // buat query update
    $sql = "UPDATE peserta_event SET 
            nama_mahasiswa='$nama',
            nim='$nim',
            universitas='$universitas',
            jurusan='$jurusan',
            nama_event='$event'
            WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // apakah update berhasil?
    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
