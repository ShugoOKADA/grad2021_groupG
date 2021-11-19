<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");
    if ($link == null) {
        die("接続に失敗しました");
    }
    mysqli_set_charset($link, "utf8");
    $result = mysqli_query($link, "SELECT * FROM event");
    echo "データ件数は" . mysqli_num_rows($result) . "件<br>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo $row['name'] . "<br>";
        echo $row['date'] . "<br>";
        echo $row['size'] . "<br>";
        echo $row['method'] . "<br>";
        echo $row['image'] . "<br>";
    }
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
</body>

</html>