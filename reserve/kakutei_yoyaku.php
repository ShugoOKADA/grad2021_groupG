<?php require_once("../header.php");?>
<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

//$mail = $_POST['address'];
//$pass = $_POST['password'];
$id = $_GET['id']; 
$mail = $_GET['mail'];

$sql = "DELETE FROM reserve WHERE eventId=" . $id . " AND mail='" . $mail . "'";
print $sql;

mysqli_query($link, $sql);
mysqli_close($link);
?>
<!-- Section-->
        <section class="py-5">
        <p> への内容の予約を取り消しました。</p>

    <input type="button" onclick="location.href='../top.php'" value="TOPへ">
        </section>
       
     <?php require_once("../footer.php");?>




