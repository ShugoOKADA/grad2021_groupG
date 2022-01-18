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
    <!-- <form method="$_POST" action="kakunin_yoyaku.php"> -->
    <?php
                    $link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");
                    if ($link == null) {
                        die("接続に失敗しました");
                    }
                    mysqli_set_charset($link, "utf8");
                    $result = mysqli_query($link, "select event.name, event.id from reserve inner join event on reserve.eventId = event.id where mail='".$_GET['address']."'");
                    ?>
      <h1>予約一覧</h1>
    <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
     <p><?=$row['name'] ?><a href="kakunin_yoyaku.php?id=<?=$row['id']?>&mail=<?=$_GET['address']?>"><input class="btn btn-success" type="submit" value="取り消し"></a></p>
    <?php }
      mysqli_free_result($result);
      mysqli_close($link); ?>
    <!-- </form> -->
  </div>
</section>

<?php require_once("../footer.php"); ?>