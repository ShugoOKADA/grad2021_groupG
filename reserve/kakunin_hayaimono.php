<?php require_once("../header.php"); ?>
<?php
$link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");

if ($link == null) {
    echo "接続に失敗しました：";
} else {
    echo "接続に成功しました：";
}

$result = mysqli_query($link, "SELECT name FROM reserve where eventId=" . $_POST['eventId'] . " and number=" . $_POST['number']);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if ($row != null) { //重複がある場合

?>
<p>重複してます</p>
<?php } else { //重複あり
?>
<!-- Section-->
<section class="py-5">

    <form method="post" action="reserve_tuika.php">
        <p>座席番号<?=$_POST['number'] ?>でいいですか?</p>

        <input type="submit" class="btn btn-success" value="確定">
        <input type="button" class="btn btn-success" onclick="history.back()" value="戻る">
        <input type="hidden" name="eventId" value="<?= $_POST['eventId'] ?>">
        <input type="hidden" name="name" value="<?= $_POST['name'] ?>">
        <input type="hidden" name="mail" value="<?= $_POST['mail'] ?>">
        <input type="hidden" name="pass" value="<?= $_POST['pass'] ?>">
        <input type="hidden" name="number" value="<?=$_POST['number'] ?>">
    </form>


</section>

<?php } ?>    

<?php require_once("../footer.php"); ?>