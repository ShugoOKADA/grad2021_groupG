<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$name = $_POST['name'];
$date = $_POST['date'];
$size = $_POST['size'];
$method = $_POST['method'];
$image = $_POST['image'];
$address = $_POST['address'];
$sql = "INSERT INTO event (name, date, size, method, image, address) VALUES ('" . $name . "','" . $date . "'," . $size . "," . $method . ",'" . $image . "','" . $address . "')";
mysqli_query($link, $sql);

mysqli_close($link);
?>
<a href="../top.php">TOPへ</a>