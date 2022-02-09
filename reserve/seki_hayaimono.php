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
  $method = $row['method'];
  $result = mysqli_query($link, "SELECT * FROM zaseki where eventId=" . $_GET['eventId'] . " ORDER BY sekiban");

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $rows[] = $row;
  }
  //print_r($rows);
  $tukaeru = array_column($rows, 'tukaeru');
  // print_r($tukaeru);
  ?>
  <table class="">
    <?php if ($method == 1) {
      $path = "kakunin_hayaimono.php";
    } else {
      $path = "kakunin_chuusen.php";
    } ?>
    <form action="<?= $path ?>" method="POST">
      <?php $count = 0; ?>
      <?php for ($i = 1; $i <= $tate; $i++) { ?>
        <tr>
          <?php for ($j = 1; $j <= $yoko; $j++) {
            if ($tukaeru[$count++] == 1) {
          ?>
              <td><label class="btn btn-info"><input type="radio" name="number" value="<?= $count ?>"><?= $count ?></label></td>
            <?php
            } else {
            ?>
              <td><label class="btn btn-info"><input type="radio" name="number" value="<?= $count ?>" disabled><?= $count ?></label></td>
            <?php
            }
            ?>
          <?php } ?>
        </tr>
      <?php } ?>
  </table>

  </table>
  <input type="hidden" name="eventId" value="<?= $_GET['eventId'] ?>">
  <input type="hidden" name="name" value="<?= $_GET['name'] ?>">
  <input type="hidden" name="mail" value="<?= $_GET['mail'] ?>">
  <input type="hidden" name="pass" value="<?= $_GET['pass'] ?>">
  <p><input class="btn btn-success" type="submit" value="確定"></p>
  </form>
</body>
<style>
  .btn-info {
    width: 65px;
    height: 30px;
  }
</style>

</html>
<?php require_once("../footer.php"); ?>