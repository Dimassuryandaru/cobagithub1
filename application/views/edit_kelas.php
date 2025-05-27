<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f3f5;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            max-width: 450px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
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
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #27ae60;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #219150;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #27ae60;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Edit Kelas</h2>
    <form method="post" action="<?php echo site_url('crudkelas/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $tabel_kelas->id; ?>">

        <label>Kode Kelas:</label>
        <input type="text" name="kode_kelas" value="<?php echo $tabel_kelas->kode_kelas; ?>" required>

        <label>Nama Kelas:</label>
        <input type="text" name="nama_kelas" value="<?php echo $tabel_kelas->nama_kelas; ?>" required>

        <button type="submit">Update</button>
        <?php echo anchor('crudkelas', 'Kembali'); ?>
    </form>
</body>
</html>
