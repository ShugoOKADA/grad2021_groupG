<?php

if($_POST['address']=='hoge@gmail.com' || $_POST['address']=='piyo@gmail.com' || $_POST['address']=='koba@gmail.com'){

    $msg = "location: /grad2021_groupG/event/select_syusai.php?address=".$_POST['address'];
    header($msg);
    
} else {

    header("location: ./login_syusai_error.php");

}

?>