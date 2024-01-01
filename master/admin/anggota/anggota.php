<?php
    include '../../../class_db.php';
    include '../cek_login.php';
    $db = new database();

        // Tentukan jumlah data per halaman
        $per_page = 25;

    if (isset($_POST['cari'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
    } else {
        $id = '';
        $nama = '';
    }
    // Ambil nilai halaman dari parameter URL, atau set default ke 1
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../../dist/css/anggota.css">
        <title>Data Anggota Koperasi PT.UNKNOWN</title>
        
    </head>
    <body>
            <h2>Data Anggota Koperasi PT.UNKWON</h2><br>

            <form action="" method="post">
                <input type="text" name="id" value="<?= $id ?>" placeholder="id">
                <input type="text" name="nama" value="<?= $nama ?>" placeholder="Nama">
                <input type="submit" name="cari" value="Cari">
            </form><br><br>

            <div class="box-menu">
            <a href="../dasboard.php">BACK</a>
            <a href="anggota_add.php">ADD</a>
        </div><br><br>
            
            <table width="100%" align="center" border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No</th>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>No. Hp</th>
                        <th>ALAMAT</th>
                        <th>Gender</th>
                        <th>Tanggal Lahir</th>
                        <th>Status</th>
                        <th>Username</th>
                        <th>Sign Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT *
                            FROM anggota 
                            WHERE id LIKE '%$id%'
                            AND nama LIKE '%$nama%'
                            ORDER BY id DESC
                            LIMIT $per_page";
                    $data = $db->fetchdata($sql);
                    $i = 0;
                    foreach ($data as $dat) {
                        $i++;
                        echo "<tr>
                                <td><a href='anggota_detail.php?id=".$dat['id']."'>EDIT</a></td>
                                <td>$i</td>
                                <td>".$dat['id']."</td>
                                <td>".$dat['nama']."</td>
                                <td>".$dat['telp']."</td>
                                <td>".$dat['alamat']."</td>
                                <td>".$dat['gender']."</td>
                                <td>".date('Y-m-d', strtotime($dat['tanggal_lahir']))."</td>   
                                <td>".$dat['status']."</td>
                                <td>".$dat['username']."</td>
                                <td>".$dat['sign_date']."</td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>

             <!-- Tombol Pagination -->
        <div style='text-align: center; margin-top: 10px;'>
            <?php
            $total_pages = ceil(count($data) / $per_page);
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='?page=$i'>$i</a> ";
            }
            ?>
        </div>

    </body>
</html>
