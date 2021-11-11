<?php require_once ("header.php"); ?>
        <section class="py-5">
        <h1>予約完了</h1>
                    <p>予約が完了しました。以下の予約番号を控えおいてください。</p>
                    <h3>予約情報</h3>
                    <table class="input">
                        <tr><th>予約番号</th><td><?php echo $reserveNo; ?></td></tr>
                    </table>

                    <input type="button" onclick="location.href='./kakunin_hayaimono.php'" value="OK">
        </section>
        <!-- Footer-->
<?php require_once ("footer.php"); ?>