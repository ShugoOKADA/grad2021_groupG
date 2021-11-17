<?php require_once ("../header.php"); ?>
        <section class="py-5">
        <form action="touroku_check.php" method="post">
        <p>名前を入力してください：<input class="form-control" type="text" name="user"></p>
        <p>email：<input class="form-control" type="text" name="address"></p>
        <p>パスワード：<input class="form-control" type="password" name="password"></p>
        <p>確認のためもう1度パスワードを入力してください：<input class="form-control" type="password" name="password"></p>
        <button type="submit" class="btn btn-success">OK</a></button>
        </section>
<?php require_once ("../footer.php"); ?>


