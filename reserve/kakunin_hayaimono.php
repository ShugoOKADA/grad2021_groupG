<?php require_once("../header.php");?>
<!-- Section-->
        <section class="py-5">
           
            <form method="post" action="reserve_tuika.php">
            <p>座席番号A-1番でよろしいでしょうか？</p>

            <input type="submit" class="btn btn-success" value="確定">
            <input type="button" class="btn btn-success" onclick="history.back()" value="戻る">
            <input type="hidden" name="eventId" value="<?=$_POST['eventId'] ?>">
            <input type="hidden" name="name" value="<?=$_POST['name'] ?>">
            <input type="hidden" name="mail" value="<?=$_POST['mail'] ?>">
            <input type="hidden" name="password" value="<?=$_POST['password'] ?>">
            <input type="hidden" name="number" value="1" >
            </form>

    
        </section>
       
     <?php require_once("../footer.php");?>




