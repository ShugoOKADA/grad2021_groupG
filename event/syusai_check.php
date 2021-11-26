<?php

if($_POST['address']=='hoge@gmail.com' || $_POST['address']=='piyo@gmail.com' || $_POST['address']=='koba@gmail.com'){
    
    $msg = "location: /grad2021_groupG/../top_syusai.php?address=".$_POST['address'];
    header($msg);

} else {

    header("location: ./syusai_error.php");

}

?>