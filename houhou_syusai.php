<?php require_once ("header.php"); ?>
        <section class="py-5">
        <h1>抽選方法</h1>
    <h2>予約方法をお選び下さい</h2>
    <input type="radio" name="gender" value="male">早い者勝ち
　　 <input type="radio" name="gender" value="female">抽選<br><br>
    <input type="button" onclick="location.href='./houhou_syusai.php'" value="確定">

    <form action="up.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fname">
  <input type="submit" value="アップロード">
   </form>
        </section>

        <!-- Footer-->
<?php require_once ("footer.php"); ?>
