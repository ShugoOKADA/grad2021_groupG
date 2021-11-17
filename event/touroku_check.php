<?php

if($_POST['address']=='hoge@gmail.com'){

    header("location: ./event.php");

} else {

    header("location: ./pass_error.php");

}

?>