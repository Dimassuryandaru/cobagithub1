<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
    <center>
        <h3>Membuat CRUD dengan CodeIgniter</h3>
        <h3>Tambah data baru</h3>
        <form action="<?php echo base_url() . 'index.php/crud/tambah_aksi'; ?>" method="post">
            <table style="margin: 20px auto;">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Tambah"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
