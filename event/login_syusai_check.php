<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$mail = $_POST['address'];
$pass = $_POST['password'];

$sql = "SELECT pass FROM userlist WHERE mail = '" . $mail . "'";


$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$pass = $row['pass'];

if ($_POST['password'] == $pass && ($mail != "" && $pass != "")) {

    $msg = "location: /grad2021_groupG/event/select_syusai.php?address=" . $_POST['address'];
    header($msg);
} else {
    print("だめ".$pass);
    //header("location: ./login_syusai_error.php");

}

mysqli_close($link);
