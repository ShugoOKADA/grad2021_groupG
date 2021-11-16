<?php
if($_POST['address']=='hoge@gmail.com'){
    header("location: ./itiran_yoyaku.php");
} else {
    header("location: ./login_error.php");
}
?>