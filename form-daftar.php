<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran  Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            padding: 40px;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Form Pendaftaran Event Mahasiswa</h2>
    <form action="proses-pendaftaran.php" method="POST">
        <p>
            <label>Nama:</label>
            <input type="text" name="nama_mahasiswa" required />
        </p>
        <p>
            <label>NIM:</label>
            <input type="text" name="nim" required />
        </p>
        <p>
            <label>Universitas:</label>
            <input type="text" name="universitas" required />
        </p>
        <p>
            <label>Jurusan:</label>
            <input type="text" name="jurusan" required />
        </p>
        <p>
            <label>Event:</label>
            <input type="text" name="nama_event" required />
        </p>
        <p>
            <input type="submit" name="simpan" value="Daftar" />
        </p>
    </form>
</div>

</body>
</html>
