<?php
if($_POST['address']=='hoge@gmail.com' || $_POST['address']=='piyo@gmail.com' || $_POST['address']=='koba@gmail.com'){

    $msg = "location: /grad2021_groupG/reserve/itiran_yoyaku.php?address=".$_POST['address'];
    header($msg);

} else {
    
    header("location: /grad2021_groupG/reserve/login_error.php");
}
?>