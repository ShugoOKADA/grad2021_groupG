<?php
if($_POST['address']=='hoge@gmail.com'){
    header("location: /grad2021_groupG/reserve/itiran_yoyaku.php");
} else {
    header("location: /grad2021_groupG/reserve/login_error.php");
}
?>