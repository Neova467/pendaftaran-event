<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f5f9;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .btn-tambah {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .btn-tambah:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .aksi a {
            color: white;
            padding: 6px 10px;
            margin-right: 5px;
            border-radius: 4px;
            text-decoration: none;
        }

        .edit-btn {
            background-color: #f0ad4e;
        }

        .hapus-btn {
            background-color: #d9534f;
        }

        .aksi a:hover {
            opacity: 0.8;
        }

        .pesan {
            padding: 10px;
            margin-bottom: 15px;
            background-color: #e0ffe0;
            color: #007700;
            border: 1px solid #aaffaa;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa Terdaftar</h1>

    <!-- Notifikasi jika berhasil -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
        <div class="pesan">Data berhasil disimpan!</div>
    <?php endif; ?>

    <!-- Tombol Tambah -->
    <a class="btn-tambah" href="form-daftar.php">[+] Tambah Mahasiswa</a>

    <!-- Tabel Data -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Universitas</th>
            <th>Jurusan</th>
            <th>Event</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM peserta_event ORDER BY id DESC";
        $query = mysqli_query($db, $sql);

        while ($mhs = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$mhs['id']."</td>";
            echo "<td>".$mhs['nama_mahasiswa']."</td>";
            echo "<td>".$mhs['nim']."</td>";
            echo "<td>".$mhs['universitas']."</td>";
            echo "<td>".$mhs['jurusan']."</td>";
            echo "<td>".$mhs['nama_event']."</td>";
            echo "<td class='aksi'>
                    <a class='edit-btn' href='form-edit.php?id=".$mhs['id']."'>Edit</a>
                    <a class='hapus-btn' href='hapus.php?id=".$mhs['id']."' onclick=\"return confirm('Yakin ingin menghapus?');\">Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
