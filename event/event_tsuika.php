<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$name = $_POST['name'];
$date = $_POST['date'];
$tate = $_POST['tate'];
$yoko = $_POST['yoko'];
$method = $_POST['method'];
$image = $_POST['image'];
$address = $_POST['address'];
$sql = "INSERT INTO event (name, date, tate, yoko, method, image, address) VALUES ('" . $name . "','" . $date . "'," . $tate . "," . $yoko . "," . $method . ",'" . $image . "','" . $address . "')";
mysqli_query($link, $sql);

$sql = "SELECT id FROM event WHERE name='" . $name . "'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$id = $row['id'];
for ($i = 1; $i <= $tate * $yoko; $i++) {
    //$sql = "INSERT INTO zaseki (eventId, sekiban, tukaeru) VALUES (" . $id . " , " . $i . ", FALSE)";
    $sql = "INSERT INTO zaseki (eventId, sekiban, tukaeru) VALUES (" . $id . "," . $i . ", TRUE)";
    mysqli_query($link, $sql);
}



mysqli_close($link);
?>
<a href="../top.php">TOPへ</a>