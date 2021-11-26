<?php require_once ("../header.php"); ?>
        <section class="py-5">
        <form action="syusai_check.php" method="post">
        <p>会員登録</p>
        <p>名前を入力してください：<input class="form-control" type="text" name="user"></p>
        <p>email：<input class="form-control" type="text" name="address"></p>
        <p>パスワードを設定して下さい(アルファベットと数字を合わせて4文字〜8文字)：<input class="form-control" type="password" name="password"></p>
        <p>確認のためもう1度パスワードを入力してください：<input class="form-control" type="password" name="password"></p>
        <p>(※パスワードはアルファベットと数字を合わせて、4文字〜8文字で入力して下さい)</p>
        <input type="submit" class="btn btn-success" value="OK">
        </section>
        </form>
        <!-- Footer-->
<?php require_once ("../footer.php"); ?>