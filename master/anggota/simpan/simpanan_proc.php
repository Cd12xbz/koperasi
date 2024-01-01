<?php
    include '../../../class_db.php';
    include '../cek_login.php';
    $db = new database();

    if (isset($_POST['submit_add'])) {
        $nomor_simpan = $_POST['nomor_simpan'];
        $id_anggota = $_POST['id_anggota'];
        $simpanan = $_POST['simpanan'];
        $tanggal_simpan = $_POST['tanggal_simpan'];

        $sql = "INSERT INTO simpan (nomor_simpan, id_anggota, simpanan, tanggal_simpan) VALUES
                                   ('$nomor_simpan','$id_anggota ','$simpanan',' $tanggal_simpan')";
        
        if (!$db->sqlquery($sql)) {
            die('Insert data Gagal' . $sql);
        } else {
            header("Location: simpanan.php");
            exit();
        }
    }
?>
