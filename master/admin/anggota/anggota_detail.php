<?php
include '../../../class_db.php';
$db = new database();

$id = $_GET['id'];

$sql = "SELECT * FROM anggota WHERE id = '$id'";
$dat = $db->datasql($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Detail Data Anggota</title>
        <!-- Add Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <!-- Add your custom CSS if needed -->
        <link rel="stylesheet" href="path/to/your/custom.css">
    </head>
    <body>

    <div class="container mt-5">
        <h2 class="mb-4">Detail Data Anggota</h2>

        <div class="menu-box mb-4">
            <a href="anggota.php" class="btn btn-primary">Kembali</a>
        </div>

        <form action="anggota_proc.php" method="POST">
            <!-- Add 'form-group' class to each form group for proper styling -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $dat['nama'] ?>">
            </div>

            <div class="form-group">
                <label for="telp">No. Hp</label>
                <input type="text" class="form-control" name="telp" id="telp" value="<?= $dat['telp'] ?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat"><?= $dat['alamat'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label><br>
                <input type="text" name="gender" id="gender" value="<?= $dat['gender'] ?>"><br><br>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label><br>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $dat['tanggal_lahir'] ?>"><br><br>
            </div>

            <div class="form-group">
                <label for="status">Status</label><br>
                <input type="text" name="status" id="status" value="<?= $dat['status'] ?>"><br><br>
            </div>

            <div class="form-group">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" value="<?= $dat['username'] ?>"><br><br>
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password" value="<?= $dat['password'] ?>">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-danger" name="submit_delete" value="HAPUS" onclick="return confirm('Yakin Hapus Data?')">
            <input type="submit" class="btn btn-success" name="submit_edit" value="SIMPAN" onclick="return confirm('Yakin Simpan Data?')">
            <input type="hidden" name="id_old" value="<?= $dat['id'] ?>">
        </div>
    </form>
</div>

<!-- Add Bootstrap and other scripts at the end of the body for faster page loading -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-U7UqztP1Tm5am32nfrJ6uZRqQ6pBQiBc15A5s5PpVeGO9diNa5A4cazr6Mz3B5N"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
