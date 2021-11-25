<?php

if($_POST['mail']=='hoge@gmail.com'){
    $msg = "location: /grad2021_groupG/reserve/seki_hayaimono.php?eventId=".$_POST['eventId']."&name=".$_POST['name']."&mail=".$_POST['mail']."&password=".$_POST['password'];
    header($msg);

} else if ($_POST['mail']=='piyo@gmail.com') {
    header("location: ./zyuhuku.php");
} else {

    header("location: ./pass_error.php");

}

?>