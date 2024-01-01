<?php
include '../../class_db.php';
$db = new database();

// Tentukan jumlah data per halaman
$per_page = 25;

if (isset($_POST['cari'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
} else {
    $kode = '';
    $nama = '';
}
// Ambil nilai halaman dari parameter URL, atau set default ke 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="">
    <title>Report Koperasi PT.UNKNOWN</title>
    <style>
        .box-menu {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            text-align: center;
            margin-top: 10px;
        }
        .pagination a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 5px;
            border: 1px solid #ddd;
            color: #333;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
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
    <h2>Report Koperasi PT.UNKNOWN</h2><br>

    <form action="" method="post">
        <input type="text" name="kode" value="<?= $kode ?>" placeholder="Kode">
        <input type="text" name="nama" value="<?= $nama ?>" placeholder="Nama">
        <input type="submit" name="cari" value="Cari">
    </form><br><br>

    <div class="box-menu">
        <a href="dasboard.php">Kembali</a>
        <a href="printAll.php">Cetak Report</a>
    </div><br><br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Anggota</th>
                <th>Nomor Simpanan</th>
                <th>Jumlah Simpanan</th>
                <th>Tanggal Simpan</th>
                <th>Nomor Pinjaman</th>
                <th>Jumlah Pinjaman</th>
                <th>Tanggal Pinjam</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT r.kode, a.nama AS Nama_Anggota, s.nomor_simpan AS nomor_simpan, s.simpanan, s.tanggal_simpan AS tanggal_simpan,
                            p.nomor_pinjam AS nomor_pinjam, p.pinjaman, p.tanggal_pinjaman
                            FROM report r
                            JOIN anggota a ON r.id_anggota = a.id
                            JOIN simpan s ON r.nomor_simpan = s.nomor_simpan
                            JOIN pinjam p ON r.nomor_pinjam = p.nomor_pinjam
                            ORDER BY r.kode DESC";

            // Fetch data with pagination
            $start = ($page - 1) * $per_page;
            $sql .= " LIMIT $start, $per_page";
            
            $data = $db->fetchdata($sql);
            $i = ($page - 1) * $per_page;
            foreach ($data as $dat) {
                $i++;
                echo "<tr>
                        <td>$i</td>
                        <td>".$dat['kode']."</td>
                        <td>".$dat['Nama_Anggota']."</td>
                        <td>".$dat['nomor_simpan']."</td>
                        <td>Rp ".number_format($dat['simpanan'], 0, ',', '.')."</td>
                        <td>".$dat['tanggal_simpan']."</td>
                        <td>".$dat['nomor_pinjam']."</td>
                        <td>Rp ".number_format($dat['pinjaman'], 0, ',', '.')."</td>
                        <td>".$dat['tanggal_pinjaman']."</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Tombol Pagination -->
    <div class="pagination">
        <?php
        $total_pages = ceil(count($data) / $per_page);
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='?page=$i' class='".($i == $page ? 'active' : '')."'>$i</a> ";
        }
        ?>
    </div>
</body>
</html>