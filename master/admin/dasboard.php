<?PHP
    include 'cek_login.php';
    include '../../class_db.php';
    $db = new database();

    //Set Limit Page
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dist/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
      <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../../index.php">PT. UNKNOW</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Sign out</a>
          </div>
        </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="dasboard.php">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pinjaman/pinjaman.php">
                    <span data-feather="file"></span>
                    Pinjaman
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="simpanan/simpanan.php">
                    <span data-feather="box"></span>
                    Simpanan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../admin/anggota/anggota.php">
                    <span data-feather="users"></span>
                    Member
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="report.php">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                  <span data-feather="calendar"></span>
                  This week
                </button>
              </div>
            </div>

            <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

            <h2>Data Terbaru</h2>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">alamat</th>
                    <th scope="col">Simpanan</th>
                    <th scope="col">Pinjaman</th>
                    <th scope="col">Tgl Simpan</th>
                    <th scope="col">Tgl Pinjam</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $sql = "SELECT
                      a.id AS id_anggota,
                      a.nama AS nama_anggota,
                      a.telp,
                      a.alamat,
                      s.simpanan,
                      p.pinjaman,
                      DATE_FORMAT(s.tanggal_simpan, '%d-%m-%Y') AS tanggal_simpan,
                      DATE_FORMAT(p.tanggal_pinjaman, '%d-%m-%Y') AS tanggal_pinjaman
                  FROM
                      report r
                  JOIN anggota a ON r.id_anggota = a.id
                  JOIN simpan s ON r.nomor_simpan = s.nomor_simpan
                  JOIN pinjam p ON r.nomor_pinjam = p.nomor_pinjam
                  ORDER BY
                      a.id DESC";
                  $data = $db->fetchdata($sql);
                  $i = 0;

                  foreach ($data as $dat) {
                      $i++;
                      $formatted_simpanan = 'Rp ' . number_format($dat['simpanan'], 0, ',', '.');
                      $formatted_pinjaman = 'Rp ' . number_format($dat['pinjaman'], 0, ',', '.');

                      echo "<tr>
                              <td>$i</td>
                              <td>".$dat['id_anggota']."</td>
                              <td>".$dat['nama_anggota']."</td>
                              <td>".$dat['telp']."</td>
                              <td>".$dat['alamat']."</td>
                              <td>".$formatted_simpanan."</td>
                              <td>".$formatted_pinjaman."</td>
                              <td>".$dat['tanggal_simpan']."</td>
                              <td>".$dat['tanggal_pinjaman']."</td>
                            </tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>

      <script>
          // Menggunakan data PHP yang diambil dari server
          var jumlahAnggota = <?php echo $jumlah_anggota; ?>;
          var totalPinjaman = <?php echo $total_pinjaman; ?>;

          // Membuat diagram lingkaran
          var ctx = document.getElementById('myChart').getContext('2d');
          var myChart = new Chart(ctx, {
              type: 'pie',
              data: {
                  labels: ['Jumlah Anggota', 'Total Pinjaman'],
                  datasets: [{
                      data: [jumlahAnggota, totalPinjaman],
                      backgroundColor: ['#FF6384', '#36A2EB']
                  }]
              },
              options: {
                  responsive: true,
                  maintainAspectRatio: false
              }
          });
      </script>



      <script src="../../bootstrap/dist/js/bootstrap.bundle.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="../../dist/js/dashboard.js"></script>
  </body>
</html>
