<?php require_once("../header.php"); ?>
<section class="py-5">
        <form method="post" action="../top_kyaku.php">
                <h1>予約完了</h1>
                <p>予約が完了しました。以下の予約番号を控えおいてください。</p>
                <h2>予約情報</h2>
                <table class="input">
                        <tr>
                                <p>座席番号<?= $_GET['number'] ?>です。</p>
                        </tr>
                </table>

                <input type="submit" class="btn btn-success" value="OK">
        </form>


</section>
<!-- Footer-->
<?php require_once("../footer.php"); ?>