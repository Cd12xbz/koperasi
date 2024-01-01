<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form name="myform" action="proc.php" method="post" id="form">

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>

        <div class="form-group">
            <label for="telp">No. Hp:</label>
            <input type="text" class="form-control" name="telp" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>

        <div class="form-group">
            <label for="gender">Jenis Kelamin:</label>
            <input type="text" class="form-control" name="gender" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="status">Status Keanggotaan:</label>
            <input type="text" class="form-control" name="status" required>
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Signup</button>
        <br>
        <a href="index.php">Sudah punya akun?</a>
    </form>
    <div id="menu">
        <a href="../../index.php">Kembali kemenu</a>
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
