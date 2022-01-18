<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$name = $_POST['name'];
$mail = $_POST['address'];
$pass = $_POST['password'];

$sql = "INSERT INTO userlist(name, mail, pass) VALUES('" . $name . "','" . $mail . "','" . $pass . "')";


$result = mysqli_query($link, $sql);

mysqli_close($link);
if ($result) {

    $msg = "location: /grad2021_groupG/reserve/seki_hayaimono.php";
    header($msg);
} else {

    header("location: ./touroku_syusai.php");
}
