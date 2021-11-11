<?php require_once ("header.php"); ?>
        <section class="py-5">
        <form action="hanabi.php" method="post">
        <p>会員登録</p>
        <p>名前を入力してください：<input class="form-control" type="text" name="user"></p>
        <p>email：<input class="form-control" type="text" name="address"></p>
        <p>パスワードを設定して下さい(アルファベットと数字を合わせて4文字〜8文字)：<input class="form-control" type="password" name="password"></p>
        <p>パスワード確認のためもう一度入力して下さい：<input class="form-control" type="password" name="password"></p>
        </section>
<?php require_once ("footer.php"); ?>