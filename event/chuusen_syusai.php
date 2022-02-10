<!DOCTYPE html>
<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}



$eventId = $_GET['eventId'];
// $pass = $_GET['pass'];
// $number = $_GET['number'];

$result = mysqli_query($link, "SELECT * FROM chuusen where eventId=" . $_GET['eventId'] . " ORDER BY number");

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $rows[] = $row;
}
// if ($result) {

//     $msg = "location: /grad2021_groupG/./top_syusai.php";
//     header($msg);
// } else {

//     header("location: ./touroku_syusai.php");
//}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print("抽選完了");
    //print_r($rows);


    $prev_num = 0;
    for ($i = 0; $i < count($rows); $i++) {
        $name = $rows[$i]['name'];
        $mail = $rows[$i]['mail'];
        $pass = $rows[$i]['pass'];
        $number = $rows[$i]['number'];;
        print("<p>" . $name . " " . $mail . " ");
        if ($rows[$i]['number'] != $prev_num) {
            print("あたり</p>");
            $sql = "INSERT INTO reserve (name, mail, eventId, pass, number) VALUES ('" . $name . "','" . $mail . "'," . $eventId . ",'" . $pass . "'," . $number . ")";
            mysqli_query($link, $sql);
            $prev_num = $rows[$i]['number'];
        } else {
            print("はずれ</p>");
        }
    }
    $sql = "DELETE FROM chuusen WHERE eventId=" . $eventId;
    mysqli_query($link, $sql);
    mysqli_close($link);
    ?>
    <p><a href="../top.php"><input class="btn btn-success" type="button" value="次へ"></a></p>
</body>

</html>