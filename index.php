<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Koperasi PT.UNKNOWN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="dist/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">PT.UNKNOWN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="master/anggota/signup.php">Sign Up</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="master/anggota/index.php">Log In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="master/admin/index.php" tabindex="-1" aria-disabled="true">Admin</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
          <img src="dist/image/cover1.jpg"></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Join Us</h1>
            <p>Beberapa Orang juga sudah buktikan</p>
            <p><a class="btn btn-lg btn-primary" href="master/anggota/signup.php">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
          <img src="dist/image/cover2.jpg"></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>About US</h1>
            <p>Penasaran Dengan Kami?</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <img src="dist/image/cover3.jpg"></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Prestasi Kami</h1>
            <p>Beberapa Prestasi Kami</p>
            <p><a class="btn btn-lg btn-primary" href="album.php">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <defs>
          <clipPath id="circle-mask">
            <circle cx="70" cy="70" r="70" />
          </clipPath>
        </defs>
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" clip-path="url(#circle-mask)" />
        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        <image href="dist/image/Theo.jpg" width="140" height="140" clip-path="url(#circle-mask)" />
      </svg>

        <h2>Owner</h2>
        <p></p>
        <p><a class="btn btn-secondary" href="https://www.linkedin.com/in/theo-krisna-amarya-876a70250/" target="_blank">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <defs>
          <clipPath id="circle-mask">
            <circle cx="70" cy="70" r="70" />
          </clipPath>
        </defs>
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" clip-path="url(#circle-mask)" />
        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        <image href="dist/image/andy.jpg" width="140" height="140" clip-path="url(#circle-mask)" />
      </svg>
        
        <h2>General Manager</h2>
        <p></p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <defs>
          <clipPath id="circle-mask">
            <circle cx="70" cy="70" r="70" />
          </clipPath>
        </defs>
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" clip-path="url(#circle-mask)" />
        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        <image href="dist/image/ridho.jpg" width="140" height="140" clip-path="url(#circle-mask)" />
      </svg>

        <h2>Manager</h2>
        <p></p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Nothing Last Forever<span class="text-muted">, We Can Change the Future</span></h2>
        <p class="lead">Tidak ada kata terlambat untuk Kita Merubah Masa Depan.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Theo</title>
        <rect width="100%" height="100%" fill="#eee"/>
        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        <image href="dist/image/theo2.jpg" width="500px" height="500px" />
      </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Andy</title>
        <rect width="100%" height="100%" fill="#eee"/>
        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        <image href="dist/image/andy.jpg" width="500px" height="500px" />
      </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Ridho</title>
        <rect width="100%" height="100%" fill="#eee"/>
        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        <image href="dist/image/ridho.jpg" width="500px" height="500px" />
      </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>

    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>
