<?php
include '../../../class_db.php';
$db = new database();

$nomor_simpan = $_GET['nomor_simpan'];

$sql = "SELECT s.*, a.nama AS nama
        FROM simpan s
        JOIN anggota a ON s.id_anggota = a.id
        WHERE nomor_simpan = '$nomor_simpan'";
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
        <h2 class="mb-4">Detail Data Simpanan</h2>

        <div class="menu-box mb-4">
            <a href="simpanan.php" class="btn btn-primary">Kembali</a>
        </div>

        <form action="simpanan_proc.php" method="POST">
            <!-- Add 'form-group' class to each form group for proper styling -->
            <div class="form-group">
                <label for="nomor_simpan">Nomor Simpanan</label>
                <input type="text" class="form-control" name="nomor_simpan" id="nomor_simpan" value="<?= $dat['nomor_simpan'] ?>">
            </div>

            <div class="form-group">
                <label for="id_anggota">Id Anggota</label>
                <input type="text" class="form-control" name="id_anggota" id="id_anggota" value="<?= $dat['id_anggota'] ?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <textarea class="form-control" name="nama" id="nama"><?= $dat['nama'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="simpanan">Jumlah Simpanan</label><br>
                <input type="text" name="simpanan" id="simpanan" value="Rp <?= number_format($dat['simpanan'], 0, ',', '.') ?>"><br><br>
            </div>

            <div class="form-group">
                <label for="tanggal_simpan">Tanggal simpan</label><br>
                <input type="text" name="tanggal_simpan" id="tanggal_simpan" value="<?= $dat['tanggal_simpan'] ?>"><br><br>
            </div>

        <div class="form-group">
            <input type="submit" class="btn btn-danger" name="submit_delete" value="HAPUS" onclick="return confirm('Yakin Hapus Data?')">
            <input type="submit" class="btn btn-success" name="submit_edit" value="SIMPAN" onclick="return confirm('Yakin Simpan Data?')">
            <input type="hidden" name="nomor_simpan" value="<?= $dat['nomor_simpan'] ?>">
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
