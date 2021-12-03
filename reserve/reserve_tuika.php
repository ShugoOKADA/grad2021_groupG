<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$eventId = $_POST['eventId'];
$pass = $_POST['password'];
$number = $_POST['number'];
$sql = "INSERT INTO reserve (name, mail, eventId, pass, number) VALUES ('" . $name . "','" . $mail . "'," . $eventId . ",'" . $pass . "'," . $number . ")";
mysqli_query($link, $sql);

mysqli_close($link);
?>
<a href="./kakutei_hayaimono.php">次へ</a>