<?php
    include '../../../class_db.php';
    $db = new database();

    if (isset($_POST['submit_add'])) {
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $status = $_POST['status'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Hash the password using MD5

        $sql = "INSERT INTO anggota (nama, telp, alamat, gender, tanggal_lahir, status, username, password) VALUES ('$nama', '$telp', '$alamat', '$gender', '$tanggal_lahir', '$status', '$username', '$password')";
        
        if (!$db->sqlquery($sql)) {
            die('Insert data Gagal' . $sql);
        } else {
            header("Location: anggota.php");
            exit();
        }
    }

    if (isset($_POST['submit_edit'])) {
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $status = $_POST['status'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Hash the password using MD5
        $id_old = $_POST['id_old']; // Add this line to get the value of id_old

        $sql = "UPDATE anggota SET nama = '$nama', telp = '$telp', alamat = '$alamat', gender = '$gender', tanggal_lahir = '$tanggal_lahir', status = '$status', username = '$username', password = '$password' WHERE id = '$id_old'";
        
        if (!$db->sqlquery($sql)) {
            die('Update data Gagal' . $sql);
        } else {
            header("Location: anggota.php");
            exit();
        }
    }

    if (isset($_POST['submit_delete'])) {
        $id = $_POST['id_old'];

        $sql = "DELETE FROM anggota WHERE id = '$id'";
        if (!$db->sqlquery($sql)) {
            die('Delete data Gagal' . $sql);
        } else {
            header("Location: anggota.php");
            exit();
        }
    }
?>
