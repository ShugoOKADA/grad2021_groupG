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
    <form action="seki_kakutei.php">
    <p>〇は席を選べます</p>
    <p>✕は席を選べません</p>
    <table class="">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 10; $j++) { ?>
                    <td><input type="button" class="btn btn-success" onclick="javascript:toggle(this)" value="○"></td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>
    <p><input class="btn btn-success" type="submit" value="確定"></p>
    <script lang="javascript">
        function toggle(target) {
            if (target.value == "○") {
                  target.value="✕";
            } else {
                  target.value="○";

            }
        }
    </script>
    </form>
</body>

</html>
<?php require_once("../footer.php"); ?>