<?php require_once("../header.php"); ?>
<!-- Section-->
<section class="py-5">

    <form method="post" action="chuusen_tuika.php">
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

<?php require_once("../footer.php"); ?>