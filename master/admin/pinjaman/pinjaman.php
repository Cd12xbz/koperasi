<?php
    include '../../../class_db.php';
    include '../cek_login.php';
    $db = new database();

        // Tentukan jumlah data per halaman
        $per_page = 25;

    if (isset($_POST['cari'])) {
        $nomor_pinjam = $_POST['nomor_pinjam'];
        $id_anggota = $_POST['id_anggota'];
    } else {
        $nomor_pinjam = '';
        $id_anggota = '';
    }
    // Ambil nilai halaman dari parameter URL, atau set default ke 1
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../../dist/css/s_dan_p.css">
        <title>Data Pinjaman Koperasi PT.UNKNOWN</title>
        <style>
            .box-menu {
            margin-top: 20px;
            }

            .box-menu a {
                display: inline-block;
                padding: 10px 20px;
                margin: 5px;
                text-decoration: none;
                background-color: #4CAF50;
                color: white;
                border: 1px solid #4CAF50;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .box-menu a:hover {
                background-color: #45a049;
            }
        </style>
        
    </head>
    <body>
            <h2>Data Pinjaman Koperasi PT.UNKWON</h2><br>

            <form action="" method="post">
                <input type="text" name="nomor_pinjaman" value="<?= $nomor_pinjam ?>" placeholder="nomor_pinjaman">
                <input type="text" name="id_anggota" value="<?= $id_anggota ?>" placeholder="id_anggota">
                <input type="submit" name="cari" value="Cari">
            </form><br><br>

            <div class="box-menu">
            <a href="../dasboard.php">BACK</a>
            <a href="pinjaman_add.php">Tambah</a>
        </div><br><br>
            
            <table width="100%" align="center" border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No</th>
                        <th>nomor_pinjam</th>
                        <th>ID Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Pinjaman</th>
                        <th>Tanggal_Pinjam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT p.*, a.nama AS nama_anggota
                            FROM pinjam p
                            JOIN anggota a ON p.id_anggota = a.id 
                            WHERE nomor_pinjam LIKE '%$nomor_pinjam%'
                            AND id_anggota LIKE '%$id_anggota%'
                            ORDER BY nomor_pinjam DESC
                            LIMIT $per_page";
                    $data = $db->fetchdata($sql);
                    $i = 0;
                    foreach ($data as $dat) {
                        $i++;
                        echo "<tr>
                                <td><a href='pinjaman_detail.php?nomor_pinjam=".$dat['nomor_pinjam']."'>Detail</a></td>
                                <td>$i</td>
                                <td>".$dat['nomor_pinjam']."</td>
                                <td>".$dat['id_anggota']."</td>
                                <td>".$dat['nama_anggota']."</td>
                                <td>Rp ".number_format($dat['pinjaman'], 0, ',', '.')."</td>
                                <td>".date('Y-m-d', strtotime($dat['tanggal_pinjaman']))."</td>   
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
