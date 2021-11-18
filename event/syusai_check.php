<?php

if($_POST['address']=='hoge@gmail.com'){

    header("location: ../top_syusai.php");

} else {

    header("location: ./syusai_error.php");

}

?>