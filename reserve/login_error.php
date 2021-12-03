<?php require_once ("../header.php"); ?>
        <!-- Section-->
        <section class="py-5">
        <form method="post" action="login_check.php">
        <p>email：<input class="form-control" type="text" name="address"></p>
        <p>パスワード：<input class="form-control" type="password" name="password"></p>
        <p>※emailまたは<br>パスワードが違います</p>
        <input type="submit" class="btn btn-success" value="OK">
        </section>
        <!-- Footer-->
<?php require_once ("../footer.php"); ?>