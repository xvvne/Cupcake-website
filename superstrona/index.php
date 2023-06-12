<?php
 include 'elements/header.php';
 

if(isset($_COOKIE["login"])){
    echo "<h1> Witaj, ".$_COOKIE["email"]." </h1>";
    echo "<a href='logout.php'>Wyloguj</a>";
}

?>

<div class="container">
  <div class="row ">

<?php
$sql="SELECT nazwa,cena,zdjecie FROM produkty";

  foreach ($mysqli->query($sql) as $row)
  {
  
  echo ' <div class="col-lg-4 col-md-6">

  <div class="card" style="width:300px">
  <img class="card-img-top" src="images/'.$row["zdjecie"].'" alt="Card image" height="400px">
  <div class="card-body text-center">
    <h4 class="card-title text-center">'.$row["nazwa"].'</h4>
    <p class="card-text text-center">$ '.$row["cena"].'</p>
    <button type="button" class="btn btn-light">Add to cart</button>
  </div>
  </div>
  </div>';

  }

?>
</div>
</div>
</div>
</body>