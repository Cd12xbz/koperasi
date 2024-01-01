<?php
    include '../../../class_db.php';
    $db = new database();

    if (isset($_POST['submit_add'])) {
        $id_anggota = $_POST['id_anggota'];
        $pinjaman = $_POST['pinjaman'];

        $sql = "INSERT INTO pinjam (id_anggota, pinjaman) VALUES ('$id_anggota', '$pinjaman')";
        
        if (!$db->sqlquery($sql)) {
            die('Insert data Gagal' . $sql);
        } else {
            header("Location: pinjaman.php");
            exit();
        }
    }

    if (isset($_POST['submit_edit'])) {
        $pinjaman = $_POST['pinjaman'];
        $nomor_pinjaman = $_POST['nomor_pinjaman']; // Add this line to get the value of id_old

        $sql = "UPDATE pinjam SET  pinjaman = '$pinjaman'
                WHERE nomor_pinjam = '$nomor_pinjam'";
        
        if (!$db->sqlquery($sql)) {
            die('Update data Gagal' . $sql);
        } else {
            header("Location: pinjaman.php");
            exit();
        }
    }

    if (isset($_POST['submit_delete'])) {
        $nomor_pinjam = $_POST['nomor_pinjam'];

        $sql = "DELETE FROM pinjam WHERE nomor_pinjam = '$nomor_pinjam'";
        if (!$db->sqlquery($sql)) {
            die('Delete data Gagal' . $sql);
        } else {
            header("Location: pinjaman.php");
            exit();
        }
    }
?>
