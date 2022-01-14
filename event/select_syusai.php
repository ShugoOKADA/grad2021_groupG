<?php require_once("../header.php"); ?>
<!-- Section-->

<section class="container py-5">
    <form action="kakunin_syusai.php?address=<?= $_GET['address'] ?>" method="post">
        <p>開催するイベント</p>
        <input class="form-control" type="text" name="name">
        <p>日付</p>
        <input class="form-control" type="date" name="date" id="">
        <p>スペース</p>
        <p>縦</p>
        <input class="form-control" type="number" name="size" id=""></br>
        <p>横</p>
        <input class="form-control" type="number" name="size" id=""></br>
        <p>抽選方法</p>
        <p>予約方法をお選び下さい</p>
        <input type="radio" name="method" value="1">早い者勝ち
        <input type="radio" name="method" value="2">抽選<br><br>
        <p>画像</p>
        <input class="form-control" type="text" name="image">
        <input type="submit" class="btn btn-success" value="確認">
    </form>
    <form action="up.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fname">
        <input type="submit" class="btn btn-success" value="アップロード">
    </form>

</section>

<?php require_once("../footer.php"); ?>