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
$pass = $_POST['pass'];
$number = $_POST['number'];
$sql = "INSERT INTO chuusen (name, mail, eventId, pass, number) VALUES ('" . $name . "','" . $mail . "'," . $eventId . ",'" . $pass . "'," . $number . ")";
mysqli_query($link, $sql);

mysqli_close($link);
/*
$to = $mail;
$subject = "予約完了";
$message = "ご予約頂き、誠にありがとうございます。予約が完了致しましたので、お知らせ致します。\n";
$message .= "イベント番号：".$eventId."\n";
$message .= "席番号：".$number."\n";
$headers = "FROM: s.okada70101@gmail.com";
mail($to, $subject, $message, $headers);*/
?>
<a href="./kakutei_hayaimono.php">次へ</a>