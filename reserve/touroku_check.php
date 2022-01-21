<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$id = $_POST['eventId'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['password'];

$sql = "INSERT INTO userlist(name, mail, pass) VALUES('" . $name . "','" . $mail . "','" . $pass . "')";


$result = mysqli_query($link, $sql);

mysqli_close($link);
if ($result) {

    $msg = "location: /grad2021_groupG/reserve/seki_hayaimono.php?eventId=" . $id . "&name=" . $name . "&mail=" . $mail . "&pass=" . $pass;
    header($msg);
} else {

    header("location: ./touroku_syusai.php");
}
