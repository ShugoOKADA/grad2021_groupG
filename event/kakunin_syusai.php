<?php require_once("../header.php"); ?>
<section class="py-5">
        <form action="event_tsuika.php" method="post">
                <p>開催するイベント<?= $_POST['name'] ?><br>日付<?= $_POST['date'] ?><br>スペース<br>縦<?= $_POST['tate'] ?>横<?= $_POST['yoko'] ?><br>
                        予約方法<br><?= $_POST['method'] ?>で<br>画像<?= $_POST['image'] ?><br>よろしいでしょうか</p>
                <p><?= $_GET['address'] ?></p>
                <input type="hidden" name="name" value="<?= $_POST['name'] ?>">
                <input type="hidden" name="date" value="<?= $_POST['date'] ?>">
                <input type="hidden" name="tate" value="<?= $_POST['tate'] ?>">
                <input type="hidden" name="yoko" value="<?= $_POST['yoko'] ?>">
                <input type="hidden" name="method" value="<?= $_POST['method'] ?>">
                <input type="hidden" name="image" value="<?= $_POST['image'] ?>">
                <input type="hidden" name="address" value="<?= $_GET['address'] ?>">
                <input type="submit" class="btn btn-success" value="確定">
                <input type="button" class="btn btn-success" onclick="history.back()" value="戻る">
        </form>
</section>
<?php require_once("../footer.php"); ?>