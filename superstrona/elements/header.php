<?php
include "config.php";
?>
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="../style/style.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
<nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #ffede7;">
  <div class="container">
    <a class="navbar-brand" href="#">Babeczkowo</a>
    <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="d-flex justify-content-start align-items-center">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class=nav-item">
        <a class="nav-link px-3" href=login.php>my account</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link px-3" href="#!">shop online</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#!">about us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#!">contact us</a>
        </li>
      </ul>

      <ul class="navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link pe-3" href="#!">
          <i class="fa-light fa-cart-shopping"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
