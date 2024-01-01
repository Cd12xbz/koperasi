<?php
    include '../../../class_db.php';
    $db = new database();

    if (isset($_POST['submit_add'])) {
        $id_anggota = $_POST['id_anggota'];
        $simpanan = $_POST['simpanan'];


        $sql = "INSERT INTO simpan (id_anggota, simpanan) VALUES ('$id_anggota', '$simpanan')";
        
        if (!$db->sqlquery($sql)) {
            die('Insert data Gagal' . $sql);
        } else {
            header("Location: simpanan.php");
            exit();
        }
    }

    if (isset($_POST['submit_edit'])) {
        $simpanan = $_POST['simpanan'];
        $nomor_simpanan = $_POST['nomor_simpanan']; // Add this line to get the value of id_old

        $sql = "UPDATE simpan SET  simpanan = '$simpanan'
                WHERE nomor_simpan = '$nomor_simpan'";
        
        if (!$db->sqlquery($sql)) {
            die('Update data Gagal' . $sql);
        } else {
            header("Location: simpanan.php");
            exit();
        }
    }

    if (isset($_POST['submit_delete'])) {
        $nomor_simpan = $_POST['nomor_simpan'];

        $sql = "DELETE FROM simpan WHERE nomor_simpan = '$nomor_simpan'";
        if (!$db->sqlquery($sql)) {
            die('Delete data Gagal' . $sql);
        } else {
            header("Location: simpanan.php");
            exit();
        }
    }
?>
