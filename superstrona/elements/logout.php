<?php
setcookie("login","",time()-1);
setcookie("email", "");
header("location:index.php");
?>