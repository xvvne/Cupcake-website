<html>
    <form action="logincheck.php" method="post">
        <input type="text" name="username"/>
        <input type="password" name="password"/>
        <input type="submit" value="Login"/>
</form>
</html>
<?php
if(isset($_GET["err"]))
   $msg="Invalid username or password";
?>   
