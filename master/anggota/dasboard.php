<?PHP
    include 'cek_login.php';
    include '../../class_db.php';
    $db = new database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Koperasi Simpan Pinjam</title>
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom styles here -->
    <style>
        body {
            background-image: url("../../dist/image/bg-1.jpeg");
            background-size: cover;
            padding-top: 56px; /* Adjust the height of the navbar */
        }
        h2{
            font-weight: bold;
            color: white;
        }

        /* Add your custom styles here */

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Koperasi S&P</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dasboard.php">
                                <i class="bi bi-house-door"></i>
                                Dashboard
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person"></i>
                                Account Overview
                            </a>
                        </li>
                        -->
                        <li class="nav-item">
                            <a class="nav-link" href="simpan/simpanan.php">
                                <i class="bi bi-wallet"></i>
                                Savings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pinjam/pinjaman.php">
                                <i class="bi bi-cash"></i>
                                Loans
                            </a>
                        </li>
                        <!-- Add more menu items as needed -->
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Your content goes here -->
                <h2 class="mt-4">Welcome to Dashboard</h2>
                <p></p>
            </main>
        </div>
    </div>

    <script src="../../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add your custom scripts here -->

</body>
</html>
