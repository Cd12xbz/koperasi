<?php
include '../../class_db.php';
$db = new database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
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
            header("Location: login.php");
            exit();
        }
}
?>
