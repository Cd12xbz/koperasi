<?php
    include '../../../class_db.php';
    include '../cek_login.php';

    $db = new database();

        // Tentukan jumlah data per halaman
        $per_page = 25;

    if (isset($_POST['cari'])) {
        $tanggal_simpan = $_POST['tanggal_simpan'];
    } else {
        $tanggal_simpan ='';
    }
    // Ambil nilai halaman dari parameter URL, atau set default ke 1
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../../dist/css/s_dan_p.css">
        <title>Ajuan Simpanan</title>
        <style>
            .box-menu {
                background-color: #007bff;
                padding: 10px;
                text-align: center;
            }

            .box-menu a {
                color: #fff;
                text-decoration: none;
                margin: 0 10px;
                font-weight: bold;
            }

            .box-menu a:hover {
                text-decoration: underline;
            }

            /* Responsive styles for small screens */
            @media (max-width: 576px) {
                .box-menu {
                    padding: 5px;
                }

                .box-menu a {
                    margin: 0 5px;
                }
            }
        </style>
        
    </head>
    <body>
            <h2>Ajuan Simpanan</h2><br>

            <form action="" method="post">
                <input type="text" name="tanggal_simpan" value="<?= $tanggal_simpan ?>" placeholder="tanggal_simpan">
                <input type="submit" name="cari" value="Cari">
            </form><br><br>

            <div class="box-menu">
            <a href="../dasboard.php">BACK</a>
            <a href="simpanan_add.php">ADD</a>
        </div><br><br>
            
            <table width="100%" align="center" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Simpan</th>
                        <th>ID Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Simpanan</th>
                        <th>Tanggal Simpan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT s.*, a.nama AS nama
                            FROM simpan s
                            JOIN anggota a ON s.id_anggota = a.id
                            WHERE s.tanggal_simpan LIKE '%$tanggal_simpan%'
                            ORDER BY s.tanggal_simpan DESC
                            LIMIT $per_page";
                    $data = $db->fetchdata($sql);
                    $i = 0;
                    foreach ($data as $dat) {
                        $i++;
                        echo "<tr>
                                <td>$i</td>
                                <td>".$dat['nomor_simpan']."</td>
                                <td>".$dat['id_anggota']."</td>
                                <td>".$dat['nama']."</td>
                                <td>Rp ".number_format($dat['simpanan'], 0, ',', '.')."</td>
                                <td>".date('Y-m-d', strtotime($dat['tanggal_simpan']))."</td>
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
