<?php
include 'config.php';
if (isset($_POST['sub'])) {
    $login = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $res = mysqli_query($mysqli, "select * from users where email='$email'and username='$login'");
    $result = mysqli_fetch_array($res);
    if ($result) {
        header("location: register.php?err=1");
    }else{
        $mysqli -> query("INSERT INTO users (username, password, email) VALUES ('$login', '$pass', '$email')");
        // $res->execute();
        header("location: login.php?succes=1");
    }
}

?>