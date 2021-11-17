<?php

if($_POST['address']=='hoge@gmail.com'){

    header("location: /grad2021_groupG/event/seki_hayaimono.php");

} else if ($_POST['address']=='piyo@gmail.com') {
    header("location: ./zyuhuku.php");
} else {

    header("location: ./pass_error.php");

}

?>