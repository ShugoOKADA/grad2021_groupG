<?php require_once ("../header.php"); ?>
<section class="py-5">
<p>への内容を<br>予約を取り消しします<br><br>よろしいでしょうか</p>



    <input type="button" class="btn btn-success" onclick="location.href='./kakutei_yoyaku.php?id=<?=$_GET['id']?>&mail=<?=$_GET['mail']?>'" value="確定">
    <input type="button" class="btn btn-success" onclick="history.back()" value="戻る">

    
        </section>
<?php require_once ("../footer.php"); ?>