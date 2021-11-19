<?php require_once("../header.php"); ?>
  <!-- Header
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        -->
  <!-- Section-->
  <section class="container py-5">
    <div class="">
    <form action="event_tsuika.php" method="post">
    <p>開催するイベントは<?=$_POST['name'] ?><br>日付は<?=$_POST['date'] ?><br>スペースは<?=$_POST['size'] ?><br>
    予約方法は<br><?=$_POST['gender'] ?>で<br>よろしいでしょうか</p>
    
  <p><input class="btn btn-success" type="submit" value="OK"></p>  
  </form>
    </div>
  </section>
  <?php require_once("../footer.php"); ?>
