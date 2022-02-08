<?php require_once("../header.php"); ?>
<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$id = $_POST['eventId'];
$tate = $_POST['tate'];
$yoko = $_POST['yoko'];
print($id);
for ($i = 1; $i <= $tate * $yoko; $i++) {
    $sql = "INSERT INTO zaseki (eventId, sekiban, tukaeru) VALUES (" . $id . "," . $i . ", TRUE)";
    $namae = "zaseki" . $i;
    if ($_POST[$namae] == "○") {
        $sql = "UPDATE zaseki SET tukaeru=1 WHERE eventId=" . $id . " AND sekiban=" . $i;
        //$sql = "UPDATE zaseki SET tukaeru=1 WHERE eventId=37 AND sekiban=5";
    } else {
        $sql = "UPDATE zaseki SET tukaeru=0 WHERE eventId=" . $id . " AND sekiban=" . $i;
        //$sql = "UPDATE zaseki SET tukaeru=0 WHERE eventId=37 AND sekiban=6";
    }

    mysqli_query($link, $sql);
}
mysqli_close($link);
?>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../top.php">
        <p>修正完了</p>
        <p><input class="btn btn-success" type="submit" value="TOPへ"></p>
    </form>

</body>

</html>
<?php require_once("../footer.php"); ?>