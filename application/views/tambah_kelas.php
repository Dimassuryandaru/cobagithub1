<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f3f7;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #34495e;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1c6690;
        }
    </style>
</head>
<body>
    <h2>Tambah Kelas</h2>
    <form method="post" action="<?php echo site_url('crudkelas/tambah_aksi'); ?>">
        <label>Kode Kelas:</label>
        <input type="text" name="kode_kelas" required>

        <label>Nama Kelas:</label>
        <input type="text" name="nama_kelas" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
