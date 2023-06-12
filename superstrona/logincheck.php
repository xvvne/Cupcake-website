<?php
include 'config.php';
if (isset($_POST['sub'])) {
    $a = $_POST['name'];
    $b = $_POST['password'];

    $res = mysqli_query($mysqli, "select * from users where email='$a'and password='$b'");
    $result = mysqli_fetch_array($res);
    if ($result) {
        echo $result['email'];
        setcookie("email", $result['email']);
        if (isset($_POST["remember"]) && $ $_POST["remember"] == 1) {
            setcookie("login", "1", time() + 3600);
        } else {
            setcookie("login", "1");
            header("location: index.php");
        }

    } else {
        header("location: login.php?err=1");
    }
}

?>