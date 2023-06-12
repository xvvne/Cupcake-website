<?php 
include 'config.php'
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">stronka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Glowna</a>
                    <?php
                    if(isset($_COOKIE["login"])){
                        echo "<a class='nav-link' href='logout.php'>Wyloguj</a>";
                    }
                    else{
                        echo "<a class='nav-link' data-bs-toggle='modal' data-bs-target='#login' href=''>Login</a>";
                        echo "<a class='nav-link' data-bs-toggle='modal' data-bs-target='#register' href=''>Rejestracja</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Logowanie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="logincheck.php" method="post">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="name"/>
        <label for="email" class="form-label">Haslo</label>
        <input type="password" class="form-control" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
</br>
        <a>Zapamietaj mnie</a> <input type="checkbox" class="form-check-input" name="remember" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="sub">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Rejestracja</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="registercheck.php" method="post">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email"/>
        <label for="name" class="form-label">Login</label>
        <input type="text" class="form-control" name="name"/>
        <label for="email" class="form-label">Haslo</label>
        <input type="password" class="form-control" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Zamknij</button>
        <button type="submit" class="btn btn-success" name="sub">Zarejestruj</button>
        </form>
      </div>
    </div>
  </div>
</div>
</header>