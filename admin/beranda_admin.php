<?php
session_start();
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Pesanan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet" />

    <!-- BS Icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <!-- Table -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"
    />
  </head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="../assets/img/bakpia 2.jpg" alt="" />
          <h1>Bakpiaku<span></span></h1>
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="read.php">Bakpia</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
        <a class="" href=""></a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>

    <main id="main">
            <br><br><br><br><br><br>
            <h1>Bakpiaku Menu Admin</h1>
            <!-- Isi konten admin disini -->
            </main>
            <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-3">
    <div class="col-lg-3 col-md-6 d-flex">
      <i class="bi bi-geo-alt icon"></i>
      <div>
        <h4>Address</h4>
        <p>
          jln. Malioboro <br>
          Yogyakarta, Jawa Tengah<br>
        </p>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-telephone icon"></i>
      <div>
        <h4>contact</h4>
        <p>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> bakpiaku@gmail.com<br>
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-clock icon"></i>
      <div>
        <h4>Opening Hours</h4>
        <p>
          <strong>Mon-Sat: 11AM</strong> - 23PM<br>
          Sunday: Closed
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4>Follow Us</h4>
      <div class="social-links d-flex">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="copyright">
    <p>Created by Kelompok 3 A2 | © 2023</p>
  </div>
</div>

</footer><!-- End Footer -->
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAKPIA LEZAT</title>
</head>
<body>
    <!-- loader -->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="beranda_admin.php">Menu Admin</a></h1>
            <ul>
                <li><a href="beranda_admin.php">HOME</a></li>
                <li class="active"><a href="../admin/read.php">BAPIA</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </div>
    </header>

    <!-- label -->
    <section class="label">
        <div class="container">
            <p>HOME / BERANDA</p>
        </div>
    </section>
        <ul>
        <?php
            $role = $_SESSION['role'];
            if($role == 'admin'){ ?>
            <!-- Isi konten admin disini -->
            <h1>Selamat datang di menu admin</h1>
            <?php }?> 
    <footer>
        <p>Created by Kelompok 3 A2 | © 2023</p>
    </footer>
    </body>
</html>