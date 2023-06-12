<html>
    <form action="logincheck.php" method="post">
        <input type="email" name="email" value="email" oinvalid="blad()"/>
        <input type="password" name="password" value="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
        <a>Zapamietaj mnie<a> <input type="checkbox" name="remember" value="0" />
        <input type="submit" value="Login" name="sub"/>
</form>
</html>
<?php
if(isset($_COOKIE["login"]))
   header("location:index.php");

if(isset($_GET["err"]))
   $msg="zle haslo lub login";

if(isset($_GET["succes"]))
   $msg="Pomyslnie zarejestrowano, mozesz sie zalogowac";
?>
<p style="color:red;">
<?php if(isset($msg))
{
echo $msg;
}
?>
<p id="blad">ssss</p>
<script>
   function blad(){
       document.getElementById("blad").innerHTML = "Błąd";
   }
</script>   
 
