<?php
session_start();
$role = $_SESSION['role'];
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <title>Owner Page</title>

    <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

    <style>
    .product {
      position: relative;
    }

    .btn {
      background: var(--color-primary);
      border: 0;
      padding: 10px 40px;
      color: #fff;
      transition: 0.4s;
      border-radius: 50px;
    }

    .btn:hover {
      background: var(--color-primary);
      color: #fff;
    }

    .check-icon {
      display: none;
      position: absolute;
      top: 3px;
      left: 6px;
      color: var(--color-primary);
      font-size: 1.5rem;
    }

    .amount {
      display: none;
      position: absolute;
      width: 4rem;
      top: 3px;
      right: 6px;
    }

    .product-cb:checked~.check-icon {
      display: block;
    }

    .product-cb:checked~.amount {
      display: block;
    }

    .sum {
      padding: 8rem 2rem 0;
      position: fixed;
      top: 0;
      height: 100%;
      left: -400px;
      transition: left .5s ease;
      font-size: 14px;
      background-color: white;
      padding: 50px 0;
      color: black;
    }

    .sum.show {
      left: 0;
      transition: left .5s ease;
    }
  </style>
  </head>

<body>
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../assets/img/bakpia 2.jpg" alt="">
        <h1>Bakpiaku OWNER<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
      <a class="" href=""></a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  
  <main>


  
        <div class="container">
        <br><br><br><br><br><br><br><br>
        <h1>Rekap Transaksi</h1>
        </div>
        <div class="container">
        <table id="dtt" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID TRANSAKSI</th>
                <th>ID USER</th>
                <th>ID PRODUK</th>
                <th>TOTAL BAYAR</th>
                <th>STATUS PEMBELIAN</th>
                <th>TANGGAL & WAKTU</th>
            </thead>

            <tbody>
                <?php    
                $transaction_history = mysqli_query($mysqli,"SELECT * FROM transaction_history");
                while($row = mysqli_fetch_array($transaction_history)){
                    echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['user_id']."</td>
                    <td>".$row['id_produk']."</td>
                    <td>".$row['total_price']."</td>
                    <td>".$row['status']."</td>
                    <td>".$row['waktu']."</td>
                    </tr>";
                }
                ?>
            </tr>
            </tbody>
        </table>
        </div>

        <script>
        $(document).ready(function () {
            $('#dtt').DataTable();
        });
        </script>
    </main>

    <!-- ======= Footer ======= -->
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
</body>
</html>