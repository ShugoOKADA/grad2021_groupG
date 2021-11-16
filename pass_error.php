<?php require_once ("header.php"); ?>
        <section class="py-5">
        <form action="pass_error.php" method="post">
        <p>名前を入力してください：<input class="form-control" type="text" name="user"></p>
        <p>email：<input class="form-control" type="text" name="address"></p>
        <p>パスワード：<input class="form-control" type="password" name="password"></p>
        <p>確認のためもう1度パスワードを入力してください：<input class="form-control" type="password" name="password"></p>
        <p>(※パスワードはアルファベットと数字を合わせて、4文字〜8文字で入力して下さい)</p>
        <button type="submit" class="btn btn-success"><a href="seki_hayaimono.php">OK</a></button>
        </section>
        <!-- Footer-->
<?php require_once ("footer.php"); ?>