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
    <form method="$_POST" action="seki_hayaimono.php">
      <input type="hidden" name="id" value=<?=$_GET['num'] ?>>
      <p>お名前：<input class="form-control" type="text" name=""></p>
      <p>email: <input class="form-control" type="text"></p>
      <p>パスワードを設定してください: <input class="form-control" type="text"></p>
      <p>確認のためもう1度パスワードを入力してください:<input class="form-control" type="text"></p>
      <p><input class="btn btn-success" type="submit" value="OK"></p>
    </form>
  </div>
</section>

<?php require_once("../footer.php"); ?>