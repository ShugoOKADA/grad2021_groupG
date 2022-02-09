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
    $result = mysqli_query($link, "SELECT * FROM zaseki where eventId=" . $_GET['eventId'] . " ORDER BY sekiban");

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }
    //print_r($rows);
    $tukaeru = array_column($rows, 'tukaeru');
    // print_r($tukaeru);
    ?>
    <form action="seki_kakutei.php" method="POST">
        <p>〇は席を選べます</p>
        <p>✕は席を選べません</p>
        <table class="">
            <?php $count = 0; ?>
            <?php for ($i = 1; $i <= $tate; $i++) { ?>
                <tr>
                    <?php for ($j = 1; $j <= $yoko; $j++) {
                        if ($tukaeru[$count++] == 1) {
                    ?>
                            <td><input type="text" class="btn btn-info" onclick="javascript:toggle(this)" name="zaseki<?= $count ?>" value="○"></td>
                        <?php
                        } else {
                        ?>
                            <td><input type="text" class="btn btn-info" onclick="javascript:toggle(this)" name="zaseki<?= $count ?>" value="✕"></td>
                        <?php
                        }
                        ?>
                    <?php } ?>
                </tr>
            <?php } ?>
            <input type="hidden" name="eventId" value="<?= $_GET['eventId'] ?>">
            <input type="hidden" name="tate" value="<?= $tate ?>">
            <input type="hidden" name="yoko" value="<?= $yoko ?>">
        </table>
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
    <p><a href="chuusen_syusai.php?eventId=<?= $_GET['eventId'] ?>"><input class="btn btn-success" type="button" value="抽選"></a></p>
</body>

</html>
<style>

</style>
<?php require_once("../footer.php"); ?>