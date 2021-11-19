<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$name = "柏中学校";
$date = "2021-11-20";
$size = 110;
$method = 1;
$image = "test_2image.jpg";
$sql = "INSERT INTO event (name, date, size, method, image) VALUES ('" . $name . "','" . $date . "'," . $size . "," . $method . ",'" . $image . "')";
mysqli_query($link, $sql);

mysqli_close($link);
?>
<a href="./next.php">次へ</a>