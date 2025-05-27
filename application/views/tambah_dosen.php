<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f5;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #34495e;
        }

        form {
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #2c3e50;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

    <h2>Tambah Dosen</h2>

    <form method="post" action="<?php echo site_url('cruddosen/simpan'); ?>">
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIDN</label>
        <input type="text" name="nidn" required>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
