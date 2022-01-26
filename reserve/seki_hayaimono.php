<?php require_once("../header.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
  <?php
  $link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");
  if ($link == null) {
    echo "接続に失敗しました：";
  } else {
    echo "接続に成功しました：";
  }
  mysqli_set_charset($link, "utf8");
  $result = mysqli_query($link, "SELECT * FROM event where id=" . $_GET['eventId']);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $tate = $row['tate'];
  $yoko = $row['yoko'];
  ?>
  <form action="kakunin_hayaimono.php" method="POST">
    <p>〇は席を選べます</p>
    <p>✕は席を選べません</p>
    <table class="">
      <?php $num = 0; ?>
      <?php for ($i = 0; $i < $tate; $i++) { ?>
        <tr>
          <?php for ($j = 0; $j < $yoko; $j++) { ?>
            <?php $num++;  ?>
            <td><label class="btn btn-success"><input type="radio" name="number" value="<?= $num ?>"><?= $num ?></label></td>

          <?php } ?>
        </tr>
      <?php } ?>

    </table>
    <input type="hidden" name="eventId" value="<?= $_GET['eventId'] ?>">
    <input type="hidden" name="name" value="<?= $_GET['name'] ?>">
    <input type="hidden" name="mail" value="<?= $_GET['mail'] ?>">
    <input type="hidden" name="pass" value="<?= $_GET['pass'] ?>">
    <p><input class="btn btn-success" type="submit" value="確定"></p>
    <script lang="javascript">
      function toggle(target) {
        if (target.value == "○") {
          target.value = "✕";
        } else {
          target.value = "○";
        }
      }
    </script>
  </form>
</body>

</html>
<?php require_once("../footer.php"); ?>