<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	</div>
        <h2>Daftar Peserta Event</h2>
        <table id="eventTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Universitas</th>
                    <th>Jurusan</th>
                    <th>Nama Event</th>
                    <th>Tanggal Daftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be loaded here -->
            </tbody>
        </table>
    </div>
		
		<?php
			$sql = "SELECT * FROM peserta_event";
			$query = mysqli_query($db, $sql);

			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$siswa['id']."</td>";
				echo "<td>".$siswa['nama_mahasiswa']."</td>";
				echo "<td>".$siswa['nim']."</td>";
				echo "<td>".$siswa['universitas']."</td>";
				echo "<td>".$siswa['jurusan']."</td>";
				echo "<td>".$siswa['nama_event']."</td>";
				echo "<td>".$siswa['tanggal_daftar']."</td>";
				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
