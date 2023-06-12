
<html>
    <form action="registercheck.php" method="post">
        Email
        <input type="email" name="email"/>
        Login
        <input type="text" name="name" required pattern="[a-zA-Z0-9_-]{4,20}"/>
        Haslo
        <input type="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
        <input type="submit" value="Register" name="sub" />
</form>
<?php 
if(isset($_GET["err"]))
    if($_GET["err"]==1){
        $msg="Uzytkownik o podanym loginie lub emailu juz istnieje";
    }
    else{
        $msg="Nieprawidlowe dane";
    }
?>
<p style="color:red;">
<?php if(isset($msg))
{
echo $msg;
}
?>