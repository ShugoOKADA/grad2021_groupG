<?php require_once ("../header.php"); ?>
        <section class="py-5">
        <form action="touroku_check.php" method="post">
        <p>名前を入力してください：<input class="form-control" type="text" name="name"></p>
        <p>email：<input class="form-control" type="text" name="mail"></p>
        <p>パスワード：<input class="form-control" type="password" name="password"></p>
        <p>確認のためもう1度パスワードを入力してください：<input class="form-control" type="password" name="password"></p>
        <p>(※パスワードはアルファベットと数字を合わせて、4文字〜8文字で入力して下さい)</p>
        <input type="submit" class="btn btn-success" value="OK"> 
</form>
        </section>
        <!-- Footer-->
<?php require_once ("../footer.php"); ?>