<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f5;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            max-width: 480px;
            margin: 0 auto;
            padding: 25px 30px;
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
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1c6690;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-align: center;
            color: #2980b9;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Edit Mata Kuliah</h2>
    <form method="post" action="<?php echo site_url('crudmatkul/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $matkul->id; ?>">

        <label>Nama dosen:</label>
        <input type="text" name="tabel_matkul" value="<?php echo $matkul->tabel_matkul; ?>" required>

        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matkul" value="<?php echo $matkul->nama_matkul; ?>" required>
        
        <button type="submit">Update</button>
        <div style="text-align: center;">
            <?php echo anchor('crudmatkul', 'Kembali'); ?>
        </div>
    </form>
</body>
</html>
