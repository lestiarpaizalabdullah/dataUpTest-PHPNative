<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <!-- bootstrap 5 css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <style>
    li {
      list-style: none;
      margin: 20px 0 20px 0;
    }

    a {
      text-decoration: none;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      margin-left: -300px;
      transition: 0.6s;
    }

    .active-main-content {
      margin-left: 250px;
    }

    .active-sidebar {
      margin-left: 0;
    }

    #main-content {
      transition: 0.4s;
    }
  </style>
</head>

<body>
  <div>
    <div class="sidebar p-4 bg-dark" id="sidebar">
      <h4 class="mt-4 text-white" style="text-align: center;"><img style="width: 100px;" src="assets/img/bic.png"></h4>
      <h5 class="mt-4 text-white" style="text-align: center;">NAME</h5>
      <hr class="text-white" />
      <div class="sb-sidenav-menu-heading text-secondary">DASHBOARD</div>
      <li>
        <a class="text-white <?php echo (isset($_GET['x']) && $_GET['x'] == 'home') ?>" href="home">
          <i class="bi bi-speedometer mr-2"></i>
          Dashboard
        </a>
      </li>
      <div class="sb-sidenav-menu-heading text-secondary">MASTER DATA</div>
      <li>
        <a class="text-white <?php echo (isset($_GET['x']) && $_GET['x']  == 'user') ?>" href="user">
          <i class="bi bi-person-fill mr-2"></i>
          User
        </a>
      </li>
      <li>
        <a class="text-white <?php echo (isset($_GET['x']) && $_GET['x'] == 'data') ?>" href="data">
          <i class="bi bi-clipboard2-data-fill mr-2"></i>
          Data Barang
        </a>
      </li>
      <div class="sb-sidenav-menu-heading text-secondary">TRANSAKSI DATA</div>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-bicycle mr-2"></i>
          Data Pegawai
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-bicycle mr-2"></i>
          Barang Masuk
        </a>
      </li>
      <li>
        <a class="text-white" href="#" data-toggle="collapse" data-target="#submenu1" aria-expanded="true" aria-controls="submenu1">
          <i class="bi bi-bicycle mr-2"></i>
          Barang Keluar
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-bicycle mr-2"></i>
          Pengembalian Barang
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-bicycle mr-2"></i>
          Barang Hampir Habis
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-bicycle mr-2"></i>
          Daftar Order Barang
        </a>
      </li>
    </div>
  </div>
  <section class="p-2" id="main-content">
    <div class="mt-3">
      <?php include $page; ?>
    </div>
  </section>
  <script>
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

      // when the button-toggle is clicked, it will add/remove the active-sidebar class
      document.getElementById("sidebar").classList.toggle("active-sidebar");

      // when the button-toggle is clicked, it will add/remove the active-main-content class
      document.getElementById("main-content").classList.toggle("active-main-content");
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
