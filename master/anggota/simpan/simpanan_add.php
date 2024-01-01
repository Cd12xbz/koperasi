<?PHP 
    include '../../../class_db.php';
    include '../cek_login.php';
    $db = new database();

    // Ambil informasi dari sesi pengguna
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajukan Simpanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    
</head>
<body>
<div class="container">
    <h2>Tambah Simpanan Koperasi S&P</h2>
    <form name="myform" action="simpanan_proc.php" method="post" id="form">

        ID ANGGOTA <br>
        <select name="id_anggota" id="id_anggota">
            <?PHP
                    $sql_pr = "SELECT * FROM anggota";
                    $data_pr = $db->fetchdata ($sql_pr);
                    foreach ($data_pr as $dat_pr){
                        echo "<option value ='".$dat_pr['id']."'>".$dat_pr['nama']."</option>";
                }
            ?>
        </select>

        <div class="form-group">
            <label for="nama">Simpanan</label>
            <input type="number" class="form-control" name="simpanan" min="10000" step="1" required>
            <small class="form-text text-muted">Minimal Rp 10.000</small>
        </div>

        <button type="submit" class="btn btn-primary" name="submit_add">Tambah</button>
    </form>
    <div id="menu">
        <a href="simpanan.php">Back</a>
    </div>
</div>
<br><br><br>

<div class="footer">
    <p>&copy; 2023 PT.UNKNOWN. All rights reserved.</p>
</div>

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
