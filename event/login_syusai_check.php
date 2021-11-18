<?php

if($_POST['address']=='hoge@gmail.com'){

    header("location: ./select_syusai.php");

} else {

    header("location: ./login_syusai_error.php");

}

?>