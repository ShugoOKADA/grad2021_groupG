<?php require_once ("../header.php"); ?>
        <section class="py-5">
        <form action="event_tsuika.php" method="post">
                <p>開催するイベントは<?=$_POST['name'] ?><br>日付は<?=$_POST['date'] ?><br>スペースは<?=$_POST['size'] ?><br>
                   予約方法は<br><?=$_POST['method'] ?>で<br>よろしいでしょうか</p>
                <input type="hidden" name="name" value="<?=$_POST['name'] ?>">
                <input type="hidden" name="date" value="<?=$_POST['date'] ?>">
                <input type="hidden" name="size" value="<?=$_POST['size'] ?>">
                <input type="hidden" name="method" value="<?=$_POST['method'] ?>">
                <input type="hidden" name="image" value="<?=$_POST['image'] ?>">
                <input type="submit" class="btn btn-success" value="確定">
                <input type="button" class="btn btn-success" onclick="history.back()" value="戻る">
        </form>
        </section>
<?php require_once ("../footer.php"); ?>

