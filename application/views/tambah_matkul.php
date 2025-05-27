<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2d3436;
        }

        form {
            background-color: #ffffff;
            max-width: 450px;
            margin: 0 auto;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #34495e;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #16a085;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #138d75;
        }
    </style>
</head>
<body>
    <h2>Tambah Mata Kuliah</h2>
    <form method="post" action="<?php echo site_url('crudmatkul/tambah_aksi'); ?>">
        <label>Nama Dosen:</label>
        <input type="text" name="tabel_matkul" required>

        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matkul" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
