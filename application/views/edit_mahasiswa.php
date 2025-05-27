<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2c80b4;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #3498db;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Edit Data Mahasiswa</h2>

    <form action="<?php echo site_url('crudmahasiswa/update'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $mahasiswa->id; ?>">

        Nama:
        <input type="text" name="nama" value="<?php echo $mahasiswa->nama; ?>" required>

        NPM:
        <input type="text" name="npm" value="<?php echo $mahasiswa->npm; ?>" required>

        Alamat:
        <textarea name="alamat" required><?php echo $mahasiswa->alamat; ?></textarea>

        Email:
        <input type="email" name="email" value="<?php echo $mahasiswa->email; ?>" required>

        Prodi:
        <input type="text" name="prodi" value="<?php echo $mahasiswa->prodi; ?>" required>

        <button type="submit">Update</button>
    </form>

    <br>
    <?php echo anchor('crudmahasiswa', 'Kembali'); ?>

</body>
</html>
